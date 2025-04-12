<?php /* Template Name: Contract success Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Thank You',
    'background_image' => get_assets_from_path('images/contact_datum.jpg')
)); ?>

<?php
get_template_part('template-parts/content/thanks', null, array(
    'content' => 'Thank you for reaching out to us. A member of our team will contact you shortly after receiving your information.',
    'image_url' => get_assets_from_path('images/img_1.png'),
    'cta_text' => 'Back to Homepage',
    'cta_link' => '#'
));
?>



<!-- Location -->
<?php get_template_part('template-parts/content/location'); ?>

<?php get_footer(); ?>