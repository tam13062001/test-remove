<?php
$title = $args['title'] ?? 'Default Title';
$heading = $args['heading'] ?? '';
$items = $args['items'] ?? array();
$image_url = $args['image_url'] ?? '';
?>

<div class="relative text-white">
    <div class="absolute top-0 left-0 right-0 h-full w-full bg-app-gradient">
        <img class="object-cover h-full w-full" src="<?php echo $image_url; ?>" alt="impact background" />
    </div>

    <div class="container relative py-[60px] lg:py-[142px]">
        <div class="text-[24px] lg:text-[24px] font-bold lg:w-[785px] w-full">
            <?php echo datum_translate($title); ?>
        </div>
        <div class="text-[20px] lg:text-[20px] font-bold lg:py-[40px] py-[30px] lg:w-[785px] w-full">
            <?php echo datum_translate($heading); ?>
        </div>

        <div class="lg:w-[70%] w-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 lg:gap-y-[60px] lg:gap-x-[65px]">
                <?php foreach ($items as $item): ?>
                    <div class="py-3 lg:py-5 flex flex-col lg:flex-row lg:space-x-5">
                        <div class="w-full text-[16px] lg:text-[20px]">
                            <span class="font-bold"><?php echo datum_translate($item['title']); ?>:</span>
                            <?php echo datum_translate($item['content']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
