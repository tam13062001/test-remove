<?php
$title = $args['title'] ?? 'Successful Stories';
$slides = $args['slides'] ?? [
    [
        'image_url' => get_stylesheet_directory_uri() . '/assets/images/hp-successful-stories.png',
        'title' => 'Digital Transformation for a Premier Banking Client',
        'description' => 'Datum Consulting helped the bank create a secure and efficient cloud system for easier digital banking.',
        'link' => '/successful-stories/',
        'link_text' => 'Read more'
    ],
    [
        'image_url' => get_stylesheet_directory_uri() . '/assets/images/slide-ss.jpg',
        'title' => 'EKS Workload Platform for Better Banking Experience',
        'description' => 'Datum delivered a resilient, secure, and automated EKS platform tailored for enterprise microservices.',
        'link' => '/successful-stories-2/',
        'link_text' => 'Read more'
    ]
];
?>

<div class="py-[50px] lg:py-[100px]">
    <div class="container">
        <h2 class="text-[32px] lg:text-[40px] font-bold mb-8 lg:mb-[60px]">
            <?php echo $title; ?>
        </h2>
    </div>
    <?php
    render_rocket_block('story-slider', array(
        'title' => $title,
        'slides' => $slides,
    ));
    ?>
</div>


