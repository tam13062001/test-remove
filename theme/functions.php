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

    wp_insert_post(array(
        'post_content' => json_encode($body),
        'post_status' => 'publish',
        'post_type' => 'datum_contact',
    ));

    return new WP_REST_Response([
        'message' => 'Contact has been saved. Thank you!'
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