<?php
$title = $attributes['title'] ?? '';
$heading = $attributes['heading'] ?? '';
$percent = $attributes['percent'] ?? '';
$percent_content = $attributes['percent_content'] ?? '';
$image_url = $attributes['image_url'] ?? '';
$items = $attributes['items'] ?? [];

ob_start();
?>

<div class=" my-[44px] lg:my-[88px]">
    <div class="flex flex-col lg:flex-row items-stretch">
        <!-- Hình bên trái -->
        <div class="w-full lg:w-1/2 flex items-end justify-center pt-[40px] lg:pt-0 min-h-[220px] lg:min-h-[636px] hidden lg:block">
            <img class="object-cover w-full h-[220px] lg:h-full " src="<?php echo esc_url($image_url) ?>" alt="" />
        </div>
        <!-- Content bên phải -->
        <div class="container w-full lg:w-1/2 flex flex-col justify-center bg-white pt-6 lg:pt-5 lg:pl-[60px] min-h-[220px] lg:min-h-[636px]">
            <div class="font-bold text-[32px] lg:text-[36px] mb-6 lg:mb-[10px]">
                <h2><?php echo esc_html($title) ?></h2>
            </div>
            <div>
                <div class="text-primary text-[16px] lg:text-[32px] leading-[150%] mb-4">
                    <?php echo esc_html($heading) ?>
                </div>
            </div>
            <div class="mb-6">
                <?php foreach($items as $item):
                    $parts = explode(':', $item['content'] ?? '', 2);
                    $before_colon = trim($parts[0] ?? '');
                    $after_colon = trim($parts[1] ?? '');
                ?>
                <div class="py-3 lg:py-5 flex flex-col lg:flex-row lg:space-x-5 border-b last:border-b-0">
                    <div class="w-full text-[16px] lg:text-[20px]">
                        <?php if ($after_colon): ?>
                            <span class="font-bold"><?php echo esc_html($before_colon); ?>:</span>
                            <?php echo esc_html($after_colon); ?>
                        <?php else: ?>
                            <?php echo esc_html($before_colon); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <?php if ($percent || $percent_content): ?>
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-6 border-y border-primary py-6">
                <div class="flex flex-col lg:flex-row items-center relative w-full">
                    <div class="relative text-[56px] lg:text-[96px] leading-[170%] mr-0 lg:mr-5
                        bg-gradient-to-r from-secondary to-primary text-transparent bg-clip-text">
                        <?php echo esc_html($percent); ?>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:justify-start leading-[170%] text-[20px] lg:text-[24px] text-primary font-bold">
                    <?php echo esc_html($percent_content); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="w-full lg:w-1/2 flex items-end justify-center pt-[40px] lg:pt-0 min-h-[220px] lg:min-h-[636px] block lg:hidden">
            <img class="object-cover w-full h-[220px] lg:h-full " src="<?php echo esc_url($image_url) ?>" alt="" />
        </div>
    </div>
</div>

<?php echo ob_get_clean(); ?>
