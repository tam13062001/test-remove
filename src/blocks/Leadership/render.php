<?php
$title = $attributes['title'] ?? '';
$heading = $attributes['heading'] ?? '';
$content = $attributes['content'] ?? '';
$image_url = $attributes['image_url'] ?? '';
$items = $attributes['items'] ?? [];
?>

<div class="relative text-white">
    <div class="lg:block hidden absolute top-0 left-0 right-0 h-full w-full bg-app-gradient">
        <img class="object-cover h-full w-full" src="<?php echo esc_url($image_url); ?>" />
    </div>
    <div class="container relative py-[50px] lg:py-[142px]">
        <div class="text-[20px] lg:text-[24px] font-bold lg:w-[785px] text-[#000000]">
            <?php echo esc_html($title); ?>
        </div>
        <div class="text-[24px] lg:text-[36px] font-bold text-[#315CD4] lg:pb-0 pb-[40px]">
            <?php echo esc_html($heading); ?>
        </div>
        <div class="text-[18px] lg:text-[24px] font-bold lg:py-[40px] lg:w-[627px] leading-[170%] text-[#000000]">
            <?php echo esc_html($content); ?>
        </div>

        <?php foreach ($items as $item): ?>
            <div class="py-2">
                <div class="font-bold text-[20px] lg:text-[24px]">
                    <?php echo esc_html($item['title'] ?? ''); ?>
                </div>
                <div class="text-[16px] lg:text-[20px]">
                    <?php if (!empty($item['isList'])):
                        $lines = explode("\n", $item['content'] ?? '');
                        ?>
                        <ul class="list-disc pl-6 space-y-1">
                            <?php foreach ($lines as $line): ?>
                                <li><?php echo esc_html(trim($line)); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p><?php echo esc_html($item['content'] ?? ''); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="container lg:hidden h-full w-full pb-[50px]">
        <img class="h-full w-full" src="<?php echo esc_url(get_assets_from_path('images/leader-mb.png')); ?>" />
    </div>
</div>
