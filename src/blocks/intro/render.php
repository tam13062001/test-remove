<?php
$content    = $attributes['content'] ?? '';
$cta_text   = $attributes['cta_text'] ?? '';
$cta_link   = $attributes['cta_link'] ?? '/contact/';
$image_url  = $attributes['image_url'] ?? '';
?>

<div class="relative pt-[60px] lg:pt-[100px]">
    <div class="lg:absolute w-full lg:top-[100px] relative z-10">
        <div class="container">
            <div class="w-full lg:w-[55%]">
                <?php if (!empty($content)) : ?>
                    <div class="mb-12 text-[24px] lg:text-[36px] font-normal">
                        <?php echo datum_translate(esc_html($content)); ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($cta_text)) : ?>
                    <a href="<?php echo esc_url($cta_link); ?>" class="btn font-bold lg:w-fit w-full">
                        <?php echo datum_get_translation($cta_text); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="flex justify-end container mt-[10px] lg:-mt-[20px]">
        <div class="lg:max-w-[60%] lg:py-2">
            <?php if (!empty($image_url)) : ?>
                <img class="lg:object-contain" src="<?php echo esc_url($image_url); ?>" alt="" />
            <?php endif; ?>
        </div>
    </div>
</div>
