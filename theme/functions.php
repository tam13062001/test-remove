<?php

if ( ! defined( 'WP_DEVELOPMENT_MODE' ) ) {
    define( 'WP_DEVELOPMENT_MODE', 'all' );
}

require_once get_template_directory() . '/inc/autoload.php';

$wp_theme = wp_get_theme();
global $rocket;
$rocket = new RocketTheme(array(
    'version' => $wp_theme->get('Version'),
    'name' => $wp_theme->get('Theme Name'),
    'development_mode' => true
));
$rocket->load();