<?php
$title = $attributes['title'] ?? '';
$items = $attributes['items'] ?? array();
$image_url = $attributes['image_url'] ?? '';
?>

<div class="relative overflow-hidden lg:mt-[50px]">
    <div class="container relative z-10">
        <div class="w-full lg:w-3/5">
            <h2 class="text-[32px] lg:text-[40px] font-bold mb-6 lg:mb-10">
                <?php echo datum_translate($title); ?>
            </h2>
            <div class="lg:h-[630px] bg-white lg:py-10 leading-[170%] lg:pr-[20%]">
                <?php foreach ($items as $item): ?>
                    <div class="mb-8">
                        <?php if (!empty($item['title'])) : ?>
                            <div class="text-primary lg:text-[24px] text-[20px] font-[700] mb-5 mt-4">
                                <?php echo datum_translate($item['title']); ?>
                            </div>
                        <?php endif; ?>
                        <div class="lg:text-[20px] text-[16px]">
                            <?php echo datum_translate($item['content']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="lg:w-1/2 lg:absolute right-0 top-0 lg:h-[825px] lg:ml-5 w-full overflow-hidden">
        <div class="flex items-end h-full relative">
            <img class="object-cover h-full w-full" src="<?php echo esc_url($image_url); ?>" alt="" />
        </div>
    </div>
</div>
