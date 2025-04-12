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