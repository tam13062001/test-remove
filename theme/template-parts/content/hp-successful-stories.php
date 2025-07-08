<?php
$title = 'successful_stories';

$slides = [
  [
    'image_url' => get_stylesheet_directory_uri() . '/assets/images/hp-successful-stories.png',
    'title' => 'successful_stories_slide.items.0.title',
    'description' => 'successful_stories_slide.items.0.description',
    'link' => '/successful-stories/premier-banking/',
    'link_text' => 'common_slide.read_more'
  ],
  [
    'image_url' => get_stylesheet_directory_uri() . '/assets/images/slide-ss.jpg',
    'title' => 'successful_stories_slide.items.1.title',
    'description' => 'successful_stories_slide.items.1.description',
    'link' => '/successful-stories/platform-customization/',
    'link_text' => 'common_slide.read_more'
  ]
];
?>

<div class="py-[50px] lg:py-[100px]">
    <div class="container">
        <h2 class="text-[32px] lg:text-[40px] font-bold mb-8 lg:mb-[60px]">
            <?php echo datum_translate($title); ?>
        </h2>
    </div>
    <?php
    render_rocket_block('story-slider', array(
        'title' => $title,
        'slides' => $slides,
    ));
    ?>
</div>