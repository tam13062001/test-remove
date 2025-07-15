<?php
$title = $attributes['title'] ?? '';
$heading = $attributes['heading'] ?? '';
$image_url = $attributes['image_url'] ?? '';
$items = $attributes['items'] ?? array();

ob_start();
?>
<div class="my-[44px] lg:my-[188px]">
    <div class="flex flex-col lg:flex-row items-stretch">
        <div class="container w-full lg:w-1/2 flex flex-col justify-center bg-white pt-6 lg:pt-0 lg:pl-[60px] lg:pr-[60px] min-h-[220px] lg:min-h-[636px]">
            <div class="font-bold text-[32px] lg:text-[36px] mb-6 lg:mb-[10px]">
                <h2><?php echo esc_html($title); ?></h2>
            </div>
            <div class="text-primary text-[16px] lg:text-[32px] font-normal leading-[170%]">
                <?php echo esc_html($heading); ?>
            </div>
            <div class="leading-[170%] lg:pb-[20px]">
                <?php foreach ($items as $item): ?>
                    <div class="py-3 flex flex-col lg:flex-row lg:space-x-5">
                        <div class="w-full text-[16px] lg:text-[20px]">
                            <?php echo esc_html($item['content'] ?? ''); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex items-end justify-center mt-8 lg:mt-0 min-h-[220px] lg:min-h-[636px]">
            <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo esc_url($image_url); ?>" alt="" />
        </div>
    </div>
</div>
<?php
echo ob_get_clean();
