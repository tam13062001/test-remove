<?php

if ( ! defined( 'WP_DEVELOPMENT_MODE' ) ) {
    define( 'WP_DEVELOPMENT_MODE', 'all' );
}
require_once get_template_directory() . '/inc/autoload.php';

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

    // Gửi mail bằng SMTP
    require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
    require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
    require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // Cấu hình SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Thay bằng SMTP của bạn
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dtam768@gmail.com'; // Thay bằng email gửi
        $mail->Password   = 'euqo mhqa varz hdin';    // Thay bằng app password
        $mail->SMTPSecure = 'tls';                  // Hoặc 'ssl'
        $mail->Port       = 587;                    // 587 cho TLS, 465 cho SSL

        // Thông tin gửi - nhận
        $mail->setFrom('dtam768@gmail.com', 'Contact Form');
        $mail->addAddress('dtam768@gmail.com', 'Your Name');

        // Nội dung email
        $mail->isHTML(false);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "You have a new message:\n\n"
            . "First Name: " . sanitize_text_field($body['first_name']) . "\n"
            . "Last Name: " . sanitize_text_field($body['last_name']) . "\n"
            . "Email: " . sanitize_email($body['email']) . "\n"
            . "Phone: " . sanitize_text_field($body['phone']) . "\n"
            . "Company: " . sanitize_text_field($body['company']) . "\n"
            . "Country: " . sanitize_text_field($body['country']) . "\n"
            . "Job: " . sanitize_text_field($body['job']) . "\n"
            . "Message: " . sanitize_textarea_field($body['message']);

        // Gửi email
        $mail->send();

        return new WP_REST_Response([
            'message' => 'Contact has been saved and email sent. Thank you!'
        ]);

    } catch (Exception $e) {
        return new WP_Error('send_fail', 'Mailer Error: ' . $mail->ErrorInfo, array('status' => 500));
    }
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