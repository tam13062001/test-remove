<?php
$title = $attributes['title'] ?? '';
$breadcrumbs = $attributes['breadcrumbs'] ?? [];
$background_image = $attributes['background_image'] ?? '';
$type = $attributes['type'] ?? 'image';
?>

<div class="h-[500px] lg:h-[603px] relative">
    <?php if ($type === 'image'): ?>
        <img class="absolute top-0 object-cover h-full w-full" src="<?php echo esc_url($background_image); ?>" />
    <?php elseif ($type === 'video'): ?>
        <video class="absolute top-0 object-cover h-full w-full" muted autoplay loop>
            <source src="<?php echo esc_url($background_image); ?>" />
        </video>
    <?php endif; ?>

    <div class="container relative flex items-center h-full">
        <div class="font-[700] text-white lg:w-1/2">
            <?php if (!empty($breadcrumbs)): ?>
                <div class="flex text-[14px] items-center space-x-2 mb-5">
                    <?php foreach ($breadcrumbs as $index => $item): ?>
                        <div><?php echo esc_html(datum_translate($item)); ?></div>
                        <?php if ($index < count($breadcrumbs) - 1): ?>
                            <div>
                                <svg width="4" height="7" viewBox="0 0 4 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 3.5L0.25 6.53109L0.25 0.468911L4 3.5Z" fill="white"/>
                                </svg>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="text-[32px] lg:text-[38px] 2xl:text-[40px]">
                <?php echo esc_html(datum_translate($title)); ?>
            </div>
        </div>
    </div>
</div>
