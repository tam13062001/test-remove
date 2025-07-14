<?php
$title = $attributes['title'] ?? 'successful_stories';
$slides = $attributes['slides'] ?? [];

?>

<div class="py-[50px] lg:py-[100px]">
    <div class="container">
        <h2 class="text-[32px] lg:text-[40px] font-bold mb-8 lg:mb-[60px]">
            <?php echo datum_translate($title); ?>
        </h2>
    </div>

    <?php
    if (function_exists('render_rocket_block')) {
        render_rocket_block('story-slider', array(
            'title' => $title,
            'slides' => $slides,
        ));
    } else {
        echo "<!-- Missing rocket block render function -->";
    }
    ?>
</div>
