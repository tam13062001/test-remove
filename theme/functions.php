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

    $host = 'smtp.office365.com';
    $port = 587;
    $username = 'wgb.cf@datumhq.com';
    $password = getenv('SMTP_PASSWORD');
    $secure = 'tls';
    $receiver = 'contacts@datumhq.com';

    $mailer = new SMTP_Mailer();
    $mailer->load(array(
        'host' => $host,
        'port' => $port,
        'username' => $username,
        'password' => $password,
        'secure' => $secure
    ));
    $subject = 'New Contact Form Submission';
    $body = "You have a new message:\n\n"
        . "First Name: " . sanitize_text_field($body['first_name']) . "\n"
        . "Last Name: " . sanitize_text_field($body['last_name']) . "\n"
        . "Email: " . sanitize_email($body['email']) . "\n"
        . "Phone: " . sanitize_text_field($body['phone']) . "\n"
        . "Company: " . sanitize_text_field($body['company']) . "\n"
        . "Country: " . sanitize_text_field($body['country']) . "\n"
        . "Job: " . sanitize_text_field($body['job']) . "\n"
        . "Message: " . sanitize_textarea_field($body['message']);

    $sent = false;
    $debug = '';
    try {
        $sent = $mailer->send(array(
            'subject' => $subject,
            'body' => $body,
            'receiver' => $receiver,
        ));
    } catch (\Exception $e) {
        $debug = $e->getMessage();
    }

    return new WP_REST_Response([
        'message' => 'Contact has been saved and email sent. Thank you!',
        'sent' => $sent,
        'debug' => $debug
    ]);
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

function test_send_mail(WP_REST_Request $request) {
    $host = 'smtp.office365.com';
    $port = 587;
    $username = 'wgb.cf@datumhq.com';
    $password = getenv('SMTP_PASSWORD');
    $secure = 'tls';
    $receiver = $request->get_param('r');

    var_dump('env', strlen($password));

    if (empty($receiver)) return new WP_REST_Request([
        'message' => 'Receiver not found'
    ]);

    $mailer = new SMTP_Mailer();
    $mailer->mail->SMTPDebug = 2;
    $mailer->load(array(
        'host' => $host,
        'port' => $port,
        'username' => $username,
        'password' => $password,
        'secure' => $secure
    ));

    $debug = '';
    $sent = false;
    try {
        $sent = $mailer->send(array(
            'subject' => 'Test',
            'body' => 'Test',
            'receiver' => $receiver,
        ));
    } catch (Exception $e) {
        $debug = $e->getMessage();
    }

    return new WP_REST_Response([
        'path' => ABSPATH,
        'sent' => $sent,
        'debug' => $debug,
        'env' => strlen($password)
    ]);
}

/*$rocket->register_rest_api('test', [
    'methods' => 'GET',
    'callback' => 'test_send_mail',
    'permission_callback' => function () {
        return true;
    }
]);*/

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