<?php
$title = $args['title'] ?? '';
$items = $args['items'] ?? array();
$image_url = $args['image_url'] ?? '';
?>
    <h2 class="container text-[32px] lg:text-[40px] lg:py-[50px] font-bold mb-6 lg:mb-10">
            <?php echo datum_translate($title); ?>
        </h2>
<div class="relative lg:h-[625px] lg:mb-[150px] mb-[100px] overflow-hidden">
    <!-- <div class="absolute top-1/2 left-0 hidden lg:block max-h-[450px] -translate-y-1/2">
        <img class="h-[450px]" src="<?php echo get_assets_from_path('images/why_datum_bg.png') ?>" alt="{$title}">
    </div> -->
        
    <div class="container z-10 relative ">
        
        <div class="w-full lg:w-3/5 lg:h-[350px] bg-white lg:py-9 lg:pr-[20px] leading-[170%] ">
            <?php foreach($items as $item): ?>
            <div class="mb-10">
                <?php if(!empty($item['title'])) {?>
                    <div class="text-primary lg:text-[24px] text-[20px] font-bold mb-5 mt-4">
                        <?php echo datum_translate($item['title']); ?>
                    </div>
                <?php } ?>
                <div class="lg:w-[90%] lg:text-[20px] text-[16px] font-Regular mb-3"><?php echo datum_translate($item['content']); ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="lg:w-1/2 lg:absolute right-0 top-[150px] lg:h-[550px] w-full  lg:ml-5">

        <div class="flex items-end h-full relative">
        
            <img class="object-cover h-full w-full" src="<?php echo $image_url?>" alt="" />
        </div>
</div>

</div>

