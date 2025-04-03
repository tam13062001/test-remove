<?php
function get_assets_from_path($path) {
    return get_stylesheet_directory_uri() . '/assets/' . $path;
}