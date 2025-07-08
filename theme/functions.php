<?php

if ( ! defined( 'WP_DEVELOPMENT_MODE' ) ) {
    define( 'WP_DEVELOPMENT_MODE', 'all' );
}
require_once get_template_directory() . '/inc/autoload.php';

load_envfile();

global $rocket;

$wp_theme = wp_get_theme();
$theme_name = $wp_theme->get( 'Name' );

$rocket = new RocketTheme(array(
    'version' => $wp_theme->get('Version'),
    'name' => $theme_name,
    'development_mode' => true
));
$rocket->load();

$rocket->add_admin_menu(array(
    'name' => $theme_name,
    'title' => $theme_name,
    'slug' => 'datum',
    'icon_url' => get_assets_from_path('/icons/datum.svg'),
));


function datum_save_contact(WP_REST_Request $request) {
    $body = $request->get_json_params();

    // Lưu vào custom post type
    wp_insert_post(array(
        'post_content' => json_encode($body),
        'post_status'  => 'publish',
        'post_type'    => 'datum_contact',
    ));

    $response = new WP_REST_Response([
        'message' => 'Contact has been saved and email sent. Thank you!',
    ]);

    ignore_user_abort(true);
    header("Connection: close");
    header("Content-Encoding: none");

    // Important: Convert WP_REST_Response to plain JSON output
    $output = wp_json_encode($response->get_data());
    echo $output;
    header("Content-Type: application/json; charset=UTF-8");
    header("Content-Length: " . strlen($output));

    ob_end_flush();
    flush();

    $host = 'smtp.office365.com';
    $port = 587;
    $username = 'wgb.cf@datumhq.com';
    $password = getenv('SMTP_PASSWORD');
    $secure = 'tls';
    $receiver = 'contacts@datumhq.com';

    $template1 = "
Dear {{first_name}} {{last_name}},

Thank you for reaching out to Datum Consulting. We have received your message and our team will review your request shortly. One of our representatives will get back to you soon.
Here's a summary of the information you provided:

Name: {{first_name}} {{last_name}}
Email: {{email}}
Job Title: {{job_title}}
Phone Number: {{phone_number}}
Company: {{company}}
Country: {{country}}
Your Message:
{{your_message}}

We appreciate your interest in Datum Consulting and look forward to assisting you.

Best regards,
Datum Consulting Team
datumhq.com
";

    $template2 = "
Hello team,

A new contact form has been submitted. Please see the details below:

First Name: {{first_name}}
Last Name: {{last_name}}
Email: {{email}}
Job Title: {{job_title}}
Phone Number: {{phone_number}}
Company: {{company}}
Country: {{country}}
Message:
{{your_message}}

Please follow up accordingly.

Best,
Datum Consulting
";

    $data = array(
        array(
            'subject' => 'Thank You for Contacting Datum Consulting',
            'template' => $template1,
            'receiver' => $body['email']
        ),
        array(
            'subject' => "New Contact Form Submission",
            'template' => $template2,
            'receiver' => $receiver
        )
    );

    foreach ($data as $item) {
        try {
            $mailer = new SMTP_Mailer();
            $mailer->load(array(
                'host' => $host,
                'port' => $port,
                'username' => $username,
                'password' => $password,
                'secure' => $secure
            ));
            $content = strtr($item['template'], array(
                '{{first_name}}' => $body['first_name'],
                '{{last_name}}' => $body['last_name'],
                '{{email}}' => $body['email'],
                '{{job_title}}' => $body['job'],
                '{{phone_number}}' => $body['phone'],
                '{{company}}' => $body['company'],
                '{{country}}' => $body['country'],
                '{{your_message}}' => $body['message']
            ));
            $mailer->send([
                'subject' => $item['subject'],
                'body' => $content,
                'receiver' => $item['receiver'],
            ]);
        } catch (\Exception $e) {
            $debug = $e->getMessage();
        }

    }

    return null;
}

$rocket->register_rest_api('save-contact', [
    'methods' => 'POST',
    'callback' => 'datum_save_contact',
    'permission_callback' => '__return_true'
]);

$rocket->register_rest_api('contacts', [
    'methods' => 'GET',
    'callback' => 'datum_list_contact',
    'permission_callback' => function () {
        return is_user_logged_in();
    }
]);

function datum_list_contact() {
    $query = new WP_Query(array(
        'post_type' => 'datum_contact',
    ));

    $result = array();
    foreach ($query->posts as $post) {
        $result[] = array(
            'id' => $post->ID,
            'data' => json_decode($post->post_content, true)
        );
    }
    return new WP_REST_Response($result, 200);
}

function add_custom_post_types() {
    register_post_type('datum_contact',
        array(
            'labels'      => array(
                'name'          => __('Contacts', 'datum'),
                'singular_name' => __('Contact', 'datum'),
            ),
            'public'      => false,
            'has_archive' => false,
            'show_in_rest' => true
        )
    );
}

add_action('init', 'add_custom_post_types');

// API: Tạo bài viết mới và lưu ảnh đại diện
function datum_create_post(WP_REST_Request $request) {
    $params = $request->get_json_params();

    $title     = sanitize_text_field($params['title'] ?? '');
    $content   = wp_kses_post($params['content'] ?? '');
    $category  = intval($params['category'] ?? 0);
    $tags      = $params['tags'] ?? '';
    $image_url = esc_url_raw($params['image_url'] ?? '');

    if (empty($title) || empty($content)) {
        return new WP_Error('missing_fields', 'Title and content are required.', ['status' => 400]);
    }

    if ($category && !term_exists($category, 'category')) {
        return new WP_Error('invalid_category', 'Danh mục không tồn tại.', ['status' => 400]);
    }

    // Tạo bài viết mới
    $post_id = wp_insert_post([
        'post_title'   => $title,
        'post_content' => $content,
        'post_status'  => 'publish',
        'post_type'    => 'post',
        'post_author'  => get_current_user_id(),
        'tags_input'   => is_array($tags) ? $tags : explode(',', $tags),
    ]);

    if (is_wp_error($post_id)) {
        return new WP_Error('create_failed', 'Không thể tạo bài viết.', ['status' => 500]);
    }

    if ($category) {
        wp_set_post_categories($post_id, [$category]);
    }

    // Nếu có ảnh đại diện từ URL, lưu vào Media
    if ($image_url) {
        require_once ABSPATH . 'wp-admin/includes/image.php';
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/media.php';

        // Tải ảnh về server & đính kèm vào post
        $tmp = download_url($image_url);
        if (is_wp_error($tmp)) {
            error_log('[create-post] Tải ảnh thất bại: ' . $tmp->get_error_message());
        } else {
            $file_array = [
                'name'     => basename($image_url),
                'tmp_name' => $tmp,
            ];

            $image_id = media_handle_sideload($file_array, $post_id);

            if (is_wp_error($image_id)) {
                error_log('[create-post] Đính kèm ảnh thất bại: ' . $image_id->get_error_message());
                @unlink($tmp); // Xóa file tạm nếu lỗi
            } else {
                set_post_thumbnail($post_id, $image_id);
            }
        }
    }

    return new WP_REST_Response([
        'success' => true,
        'post_id' => $post_id,
        'link'    => get_permalink($post_id),
    ], 200);
}

// Đăng ký route
$rocket->register_rest_api('create-post', [
    'methods'             => 'POST',
    'callback'            => 'datum_create_post',
    'permission_callback' => '__return_true',
]);


$rocket->register_rest_api('get-posts', [
    'methods' => 'GET',
    'callback' => function (WP_REST_Request $request) {
        $category = $request->get_param('category') ?: '';
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        if (!empty($category)) {
            $args['category_name'] = $category;
        }

        $query = new WP_Query($args);
        $posts = array();

        foreach ($query->posts as $post) {
            $thumbnail_url = get_the_post_thumbnail_url($post, 'full') ?: '';
            
            // Nếu không có ảnh đại diện, lấy ảnh đầu tiên từ các attachment
            if (empty($thumbnail_url)) {
                $attachments = get_attached_media('image', $post->ID);
                if (!empty($attachments)) {
                    $first_attachment = reset($attachments);
                    $thumbnail_url = wp_get_attachment_image_url($first_attachment->ID, 'full');
                }
            }

            $posts[] = array(
                'id' => $post->ID,
                'title' => get_the_title($post),
                'link' => get_permalink($post),
                'date' => get_the_date('d/m/Y', $post),
                'thumbnail' => $thumbnail_url,
                'excerpt' => get_the_excerpt($post),
            );
        }

        return new WP_REST_Response($posts, 200);
    },
    'permission_callback' => '__return_true',
]);


// Add the field to the user profile page
function add_user_title_field($user) {
    ?>
    <h3><?php _e("Additional Information", "blank"); ?></h3>

    <table class="form-table">
        <tr>
            <th><label for="user_title"><?php _e("Title"); ?></label></th>
            <td>
                <input type="text" name="user_title" id="user_title" value="<?php echo esc_attr(get_the_author_meta('user_title', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter the user's title (e.g., Co Founder, ...)."); ?></span>
            </td>
        </tr>
    </table>
    <?php
}
add_action('show_user_profile', 'add_user_title_field');
add_action('edit_user_profile', 'add_user_title_field');

// Save the custom user field
function save_user_title_field($user_id) {
    if (!current_user_can('edit_user', $user_id)) return false;
    update_user_meta($user_id, 'user_title', sanitize_text_field($_POST['user_title']));
}
add_action('personal_options_update', 'save_user_title_field');
add_action('edit_user_profile_update', 'save_user_title_field');

function get_menu_columns($location) {
    $columns = [];

    if (($locations = get_nav_menu_locations()) && isset($locations[$location])) {
        $menu_items = wp_get_nav_menu_items($locations[$location]);

        usort($menu_items, function($a, $b) {
            return $a->menu_order - $b->menu_order;
        });

        foreach ($menu_items as $item) {
            if ($item->menu_item_parent == 0) {
                $columns[$item->ID] = [
                    'title' => $item->title,
                    'children' => []
                ];
            } else {
                if (isset($columns[$item->menu_item_parent])) {
                    $columns[$item->menu_item_parent]['children'][] = [
                        'title' => $item->title,
                        'url' => $item->url
                    ];
                }
            }
        }
    }

    return array_values($columns); // reset key để dễ foreach
}

function datum_get_grouped_jobs(WP_REST_Request $request) {
    $paged = $request->get_param('paged') ? intval($request->get_param('paged')) : 1;
    $selected_categories = $request->get_param('category') ? array_map('intval', explode(',', $request->get_param('category'))) : [];

    $query_params = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => 'job',
        'paged' => $paged,
    );

    if (!empty($selected_categories)) {
        $query_params['category__in'] = $selected_categories;
    }

    $query = new WP_Query($query_params);
    $posts = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $categories = get_the_category();

            $category_info = '';
            $country = '';
            $position = '';
            $type = '';

            if (!empty($categories)) {
                $filtered = array_filter($categories, function($cat) use ($selected_categories) {
                    return empty($selected_categories) || in_array($cat->term_id, $selected_categories);
                });

                // Loại bỏ các category cha nếu có category con
                $parent_ids = array_map(function($cat) {
                    return $cat->parent;
                }, $filtered);

                $filtered_no_parents = array_filter($filtered, function($cat) use ($parent_ids) {
                    return !in_array($cat->term_id, $parent_ids);
                });

                // Sắp xếp theo thứ tự ưu tiên: position -> country -> job-type

                $order = ['position', 'country', 'job-type'];

                // Tạo mảng để phân loại categories theo nhóm
                $categorized = ['position' => [], 'country' => [], 'job-type' => [], 'other' => []];

                foreach ($filtered_no_parents as $cat) {
                    $found_group = false;
                    
                    // Kiểm tra parent categories
                    $parents = get_ancestors($cat->term_id, 'category');
                    foreach ($parents as $parent_id) {
                        $parent = get_category($parent_id);
                        if (in_array($parent->slug, $order)) {
                            $categorized[$parent->slug][] = $cat;
                            $found_group = true;
                            break;
                        }
                    }
                    
                    // Nếu chính nó là root category
                    if (!$found_group && in_array($cat->slug, $order)) {
                        $categorized[$cat->slug][] = $cat;
                        $found_group = true;
                    }
                    
                    // Nếu không thuộc nhóm nào
                    if (!$found_group) {
                        $categorized['other'][] = $cat;
                    }
                }

                // Sắp xếp lại theo thứ tự: position -> country -> job-type
                $filtered_no_parents = [];
                foreach ($order as $group) {
                    if (!empty($categorized[$group])) {
                        // Sắp xếp theo tên trong cùng nhóm
                        usort($categorized[$group], function($a, $b) {
                            return strcmp($a->name, $b->name);
                        });
                        $filtered_no_parents = array_merge($filtered_no_parents, $categorized[$group]);
                    }
                }

                // Thêm các categories khác vào cuối
                if (!empty($categorized['other'])) {
                    usort($categorized['other'], function($a, $b) {
                        return strcmp($a->name, $b->name);
                    });
                    $filtered_no_parents = array_merge($filtered_no_parents, $categorized['other']);
                }

                
                if (!empty($filtered_no_parents)) {
                    $cat_names = array_map(function($cat) {
                        return $cat->name;
                    }, $filtered_no_parents);
                    $category_info = implode(' · ', $cat_names);

                    // Tách từng loại theo slug cha
                    // Thay thế phần switch case bằng:
            foreach ($filtered_no_parents as $cat) {
                // Lấy tất cả parent
                $parents = get_ancestors($cat->term_id, 'category');
                
                // Kiểm tra từng parent
                foreach ($parents as $parent_id) {
                    $parent = get_category($parent_id);
                    switch ($parent->slug) {
                        case 'country':
                            $country = $cat->name;
                            break;
                        case 'position':
                            $position = $cat->name;
                            break;
                        case 'job-type':
                            $type = $cat->name;
                            break;
                    }
                }
                
                // Nếu chính nó là root category
                switch ($cat->slug) {
                    case 'country':
                        $country = $cat->name;
                        break;
                    case 'position':
                        $position = $cat->name;
                        break;
                    case 'job-type':
                        $type = $cat->name;
                        break;
                }
            }
                } else {
                    // Nếu không có category nào phù hợp, sử dụng category mặc định
                    $category_info = 'Other';

                }
            }

            $posts[] = array(
                'id' => $post_id,
                'title' => get_the_title(),
                'permalink' => get_permalink(),
                'categories' => $category_info,
                'country' => $country,
                'position' => $position,
                'type' => $type,
            );
        }

        // Lấy tất cả category con của 'country'
        $country_parent = get_category_by_slug('country');
        $country_terms = [];
        if ($country_parent) {
            $country_terms = get_categories([
                'taxonomy' => 'category',
                'parent' => $country_parent->term_id,
                'hide_empty' => false // lấy cả category chưa có bài post
            ]);
        }

        // Chuẩn bị mảng country trả về
        $countries = array_map(function($cat) {
            return [
                'id' => $cat->term_id,
                'name' => $cat->name,
                'slug' => $cat->slug,
            ];
        }, $country_terms);

        // Thêm vào response
        $response = array(
            'posts' => $posts,
            'countries' => $countries, // <-- thêm dòng này
            'pagination' => array(
                'total_pages' => $query->max_num_pages,
                'current_page' => $paged,
            )
        );

        wp_reset_postdata();
        return new WP_REST_Response($response, 200);
    } else {
        return new WP_REST_Response(array(
            'message' => 'No Posts Found',
            'posts' => array(),
            'pagination' => array(
                'total_pages' => 0,
                'current_page' => $paged,
            )
        ), 200);
    }
}

// Đăng ký API endpoint
$rocket->register_rest_api('grouped-jobs', [
    'methods' => 'GET',
    'callback' => 'datum_get_grouped_jobs',
    'permission_callback' => '__return_true',
]);


function datum_get_translation($key) {
    $lang = $_COOKIE['datum_lang'] ?? 'en';
    $file = get_template_directory() . "/languages/{$lang}.json";

    static $translations = [];

    if (!isset($translations[$lang])) {
        $translations[$lang] = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    }

    return $translations[$lang][$key] ?? $key;
}

function datum_translate($key) {
    // Ưu tiên cookie, sau đó đến GET, cuối cùng là 'en'
    if (isset($_COOKIE['datum_lang']) && in_array($_COOKIE['datum_lang'], ['en', 'vi'])) {
        $lang = $_COOKIE['datum_lang'];
    } elseif (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'vi'])) {
        $lang = $_GET['lang'];
    } else {
        $lang = 'en';
    }

    // Static để cache bản dịch theo request
    static $translations = [];
    if (empty($translations[$lang])) {
        $path = get_stylesheet_directory() . "/languages/{$lang}.json";
        if (file_exists($path)) {
            $content = file_get_contents($path);
            $translations[$lang] = json_decode($content, true);
        } else {
            $translations[$lang] = [];
        }
    }

    $keys = explode('.', $key);
    $value = $translations[$lang];

    foreach ($keys as $k) {
        if (is_array($value) && isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $key; // Trả về chính key nếu không tìm thấy
        }
    }

    return $value;
}


function datum_get_current_language() {
    return isset($_GET['lang']) && in_array($_GET['lang'], ['vi', 'en']) ? $_GET['lang'] : 'en';
}


add_action('init', function () {
    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
        if (in_array($lang, ['en', 'vi'])) {
            setcookie('datum_lang', $lang, time() + (3600 * 24 * 30), '/'); // lưu 30 ngày
            $_COOKIE['datum_lang'] = $lang; // để dùng ngay
        }
    }
});
