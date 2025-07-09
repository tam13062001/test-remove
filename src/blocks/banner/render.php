<?php
$attributes = $attributes ?? array();
$title = $attributes['title'] ?? '';
$background_image = $attributes['background_image'] ?? '';

get_template_part('template-parts/content/banner', null, array(
    'title' => $title,
    'background_image' => $background_image
));

?>