<?php
$title = $attributes['title'] ?? '';
$content = $attributes['content'] ?? '';
$image_url = $attributes['image_url'] ?? '';
?>

<div class="container lg:py-[100px]">
    <?php if ($image_url): ?>
        <img class="w-full" src="<?php echo esc_url($image_url); ?>" alt="" />
    <?php endif; ?>

    <div>
        <h2 class="lg:py-[100px] py-[40px] text-[24px] font-bold">
            <?php echo esc_html($title); ?>
        </h2>
        <p class="lg:text-[20px] leading-[170%] lg:w-[785px] text-[16px]">
            <?php echo esc_html($content); ?>
        </p>
    </div>
</div>
