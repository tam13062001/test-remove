<?php /* Template Name: Datum Knowledge  Template */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Datum Knowledge ',
    'background_image' => get_assets_from_path('images/Datum Knowledge.jpg')
)); ?>


<?php
get_template_part('template-parts/content/late-new-event', null, array(
    'title' => '', 
    'news_items' => array(
        array(
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
            'date' => 'Event 12,May,2025',
            'image_url' => get_assets_from_path('images/Datum-Knowledge-1.jpg')
        ),
        array(
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
            'date' => 'Event 12,May,2025',
            'image_url' => get_assets_from_path('images/Datum-Knowledge-2.jpg')
        ),
        array(
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
            'date' => 'Event 12,May,2025',
            'image_url' => get_assets_from_path('images/Datum-Knowledge-3.jpg')
        ),
        array(
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
            'date' => 'Event 12,May,2025',
            'image_url' => get_assets_from_path('images/Datum-Knowledge-4.jpg')
        ),
        array(
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
            'date' => 'Event 12,May,2025',
            'image_url' => get_assets_from_path('images/Datum-Knowledge-5.jpg')
        ),
        array(
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
            'date' => 'Event 12,May,2025',
            'image_url' => get_assets_from_path('images/Datum-Knowledge-6.jpg')
        )
    )
));
?>



<?php get_template_part('template-parts/content/back-to-top'); ?>

<?php get_footer(); ?>