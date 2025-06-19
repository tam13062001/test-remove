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
    header("Content-Type: application/json");
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