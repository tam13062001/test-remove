<?php

    $title = $attributes['title'] ?? '';
    $data = $attributes['data'] ?? [];

?>
    <div class="container">
        <h1 class="font-[700] text-[32px] lg:text-[36px] mb-5 lg:mb-[50px]">
            <?php echo esc_html($title); ?>
        </h1>
    </div>

    <div class="py-[60px] lg:py-[50px] mx-auto px-4 xl:px-0">
        <?php
        $props = array(
            'data' => $data,
            'slidesPerView' => 'auto',
        );
        render_rocket_block('card-slider', $props);
        ?>
    </div>
