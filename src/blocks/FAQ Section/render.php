<?php

    $items = $attributes['items'] ?? [];
    $text_title = $attributes['text_title'] ?? '';
?>
    <div class="container lg:py-[50px]">
        <h2 class="font-[700] text-[32px] lg:text-[36px] mb-10 lg:mb-[50px]">
            Frequently Asked Questions
        </h2>
        <div class="mb-10 lg:mb-[60px]">
            <?php foreach ($items as $item): ?>
                <div class="py-2 border-b border-primary">
                    <?php render_rocket_block('collapse-block', $item); ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="font-bold lg:text-[16px] flex flex-col lg:flex-row lg:space-x-4 space-y-4 lg:space-y-0 lg:items-center">
            <a class="btn" href="/contact/">
                 <?php echo esc_html($text_title); ?>
            </a>
        </div>
    </div>
