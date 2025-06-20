<?php /* Template Name: News-Events Template */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Datum News & Events',
    'background_image' => get_assets_from_path('images/News-Events.jpg')
)); ?>

<div class="container font-regular text-[32px] lg:text-[36px] lg:mt-[90px] mt-[60px] lg:pb-[100px] pb-[20px]">
    <h2>
        Upcoming Events
    </h2>
</div>
<?php
get_template_part('template-parts/content/Upcoming') ;
?>

<!-- <div class="container font-regular text-[32px] lg:text-[36px] pt-[100px]">
    <h2>
        Latest News & Events
    </h2>
</div> -->
<?php
// get_template_part('template-parts/content/late-new-event', null, array(
//     'title' => 'Latest News', 
//     'news_items' => array(
//         array(
//             'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
//             'date' => 'Event 12,May,2025',
//             'image_url' => get_assets_from_path('images/last-new-1.jpg')
//         ),
//         array(
//             'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
//             'date' => 'Event 12,May,2025',
//             'image_url' => get_assets_from_path('images/last-new-2.jpg')
//         ),
//         array(
//             'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
//             'date' => 'Event 12,May,2025',
//             'image_url' => get_assets_from_path('images/last-new-3.jpg')
//         ),
//         array(
//             'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
//             'date' => 'Event 12,May,2025',
//             'image_url' => get_assets_from_path('images/last-new-4.jpg')
//         ),
//         array(
//             'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
//             'date' => 'Event 12,May,2025',
//             'image_url' => get_assets_from_path('images/last-new-5.jpg')
//         ),
//         array(
//             'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.',
//             'date' => 'Event 12,May,2025',
//             'image_url' => get_assets_from_path('images/last-new-6.jpg')
//         )
//     )
// ));
?>

<?php 
get_template_part('template-parts/content/new-news', null ,array(
    'title' => 'Latest News & Events', 
    'category' => 'news-event'
)); 
?> 

<?php get_template_part('template-parts/content/back-to-top'); ?>

<?php get_footer(); ?>