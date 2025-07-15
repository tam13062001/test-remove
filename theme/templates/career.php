<?php //Template Name: Career ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Career ',
    'background_image' => get_assets_from_path('images/career.png')
)); ?>

<?php get_template_part('template-parts/content/why-join-datum',null ,array(
    'items' => [
  [
    'image' => get_assets_from_path('images/why-join-1.jpg'),
    'title' => 'Everyday empowerment',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
  ],
  [
    'image' => get_assets_from_path('images/why-join-2.jpg'),
    'title' => 'Flexibility to work <br> your way',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
  ],
  [
    'image' => get_assets_from_path('images/why-join-3.jpg'),
    'title' => 'A culture to feel good about what you do',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
  ],
  [
    'image' => get_assets_from_path('images/why-join-4.jpg'),
    'title' => 'The opportunity to make an impact',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
  ]
]

)); ?>

<?php get_template_part('template-parts/content/jobs-table'); ?>


<?php get_template_part('template-parts/content/career-swiper', null, array(
    'title' => 'Our members represent core values',
    'data' => array(
        array(
            'title' => 'Strategic Excellence',
            'description' => 'We anticipate challenges before they arise. Our technology solutions align with your business strategy, providing a clear roadmap for long-term success.',
            'image_url' => get_assets_from_path('images/data architecture.jpg')
        ),
        array(
            'title' => 'Speed with Precision',
            'description' => 'Time-to-value matters. Whether modernizing systems or deploying AI, we accelerate outcomes with surgical precision, minimizing risk while maximizing ROI.',
            'image_url' => get_assets_from_path('images/big data.jpg')
        ),
        array(
            'title' => 'Client Centric Approach',
            'description' => 'You’re the hero of your transformation story. We listen first, act second, and co-create solutions that align with your unique goals, culture, and challenges.',
            'image_url' => get_assets_from_path('images/Layer_1.jpg')
        ),
        array(
            'title' => 'Global Mindset Local Expertise',
            'description' => 'Your local challenges meet our global perspective. We design solutions that respect regional nuances while harnessing best practices from industries worldwide.',
            'image_url' => get_assets_from_path('images/cloud.jpg')
        ),
    )
)); ?>
<div class="container">
<?php 
    $recommended_posts = get_posts(array(
        'numberposts' => 2,
        'post_status' => 'publish',
        'post_type' => 'post',
        'orderby' => 'rand',
        'post__not_in' => array($post->ID)
    ));
    get_template_part('template-parts/content/late-new-event', null, array(
        'title' => 'Life at Datum',
        'news_items' => $recommended_posts
    ));
?>
</div>


<?php get_template_part('template-parts/content/back-to-top'); ?>

<?php get_footer(); ?>