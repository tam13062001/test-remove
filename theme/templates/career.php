<?php //Template Name: Career ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Career ',
    'background_image' => get_assets_from_path('images/career.png')
)); ?>

<?php get_template_part('template-parts/content/why-join-datum',null ,array(
    'items' => [
  [
    'image' => get_assets_from_path('images/empowerment.jpg'),
    'title' => 'Everyday empowerment',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
  ],
  [
    'image' => get_assets_from_path('images/flexible.jpg'),
    'title' => 'Flexibility to work your way',
  ],
  [
    'image' => get_assets_from_path('images/culture.jpg'),
    'title' => 'A culture to feel good about what you do',
  ],
  [
    'image' => get_assets_from_path('images/impact.jpg'),
    'title' => 'The opportunity to make an impact',
  ]
]

)); ?>

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

<?php get_template_part('template-parts/content/back-to-top'); ?>

<?php get_footer(); ?>