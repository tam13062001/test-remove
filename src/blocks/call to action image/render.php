<?php
$title = $attributes['title'] ?? '';
$heading = $attributes['heading'] ?? '';
$content = $attributes['content'] ?? '';
$cta_text = $attributes['cta_text'] ?? '';
$cta_link = $attributes['cta_link'] ?? '/contact/';
$image_url = $attributes['image_url'] ?? '';
?>

<div class="py-[40px] lg:py-[100px] relative">
    <div class="container">
        <div class="text-[36px] w-full lg:w-1/2 lg:mb-0">
            <div class="mb-6 lg:mb-5 text-[32px] lg:text-[36px]  font-bold">
                <?php echo esc_html($title); ?>
            </div>
            <div class="mb-6 lg:mb-5 text-[20px] lg:text-[32px] text-primary">
                <?php echo esc_html($heading); ?>
            </div>
            <div class="text-[16px] lg:text-[20px] leading-[170%] lg:pb-[100px]">
                <?php echo esc_html($content); ?>
            </div>
            <?php if ($cta_text): ?>
            <a href="<?php echo esc_url($cta_link); ?>" class="btn font-bold lg:w-fit w-full">
                <?php echo esc_html($cta_text); ?>
            </a>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($image_url): ?>
    <div class="absolute lg:h-full bottom-0 lg:top-[0px] right-0 overflow-hidden lg:block hidden">
        <img class="h-full py-16 scale-150 lg:scale-100 object-contain" src="<?php echo esc_url($image_url); ?>" />
    </div>
    <?php endif; ?>
</div>
