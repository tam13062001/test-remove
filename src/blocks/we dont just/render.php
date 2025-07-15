<?php
$title = $attributes['title'] ?? '';
$image_url = $attributes['image_url'] ?? '';
$items = $attributes['items'] ?? [];

ob_start();
?>
<div class="relative text-white">
    <div class="absolute top-0 left-0 right-0 h-full w-full bg-app-gradient">
        <?php if ($image_url): ?>
            <img class="object-cover h-full w-full" src="<?php echo esc_url($image_url); ?>" alt="" />
        <?php endif; ?>
    </div>
    <div class="container relative py-[60px] lg:pt-[142px] lg:pb-[215px]">
        <div class="text-[32px] lg:text-[36px] font-bold lg:w-[785px]">
            <?php echo esc_html($title); ?>
        </div>
        <div class="max-w-[855px]">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 lg:gap-y-[120px] gap-x-[65px] pt-[40px] lg:pt-[106px]">
                <?php foreach ($items as $item): ?>
                    <div>
                        <h3 class="text-xl lg:text-2xl font-semibold mb-3 lg:mb-2 lg:pb-5">
                            <?php echo esc_html($item['title']); ?>
                        </h3>
                        <p class="text-[16px] lg:text-xl leading-relaxed">
                            <?php echo esc_html($item['content']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php
echo ob_get_clean();
