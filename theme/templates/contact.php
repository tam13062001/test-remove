<?php /* Template Name: Contract Template */ ?>
<?php get_header(); ?>

<!-- Hero Section -->
<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Contact Us',
    'background_image' => get_assets_from_path('images/contact_datum.jpg')
)); ?>

<!-- About Section -->

<?php
get_template_part('template-parts/content/form', null, array(
    'title' => 'Please complete this form and a member of our team will be in touch.',
    'content' => 'Datum is your trusted partner in digital transformation, seamlessly integrating Cloud Solutions, Software Engineering, and Data & AI to help businesses scale, innovate, and stay ahead.',
    'image_url' => get_assets_from_path('images/img_1.png'),
    'cta_text' => 'Schedule a consultation with our expert',
    'cta_link' => '#'
));
?>



<!-- Location -->
<?php get_template_part('template-parts/content/location'); ?>

<?php get_footer(); ?>