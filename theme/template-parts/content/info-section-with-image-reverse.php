<?php
$title = $args['title'] ?? '';
$heading = $args['heading'] ?? '';
$items = $args['items'] ?? array();
$image_url = $args['image_url'] ?? '';
?>

<div class="relative lg:min-h-[880px] lg:mb-[88px]">
    <!-- <div class="absolute top-1/2 left-0 hidden lg:block max-h-[450px] -translate-y-1/2">
        <img class="h-[450px]" src="<?php echo get_assets_from_path('images/why_datum_bg.png') ?>" alt="{$title}">
    </div> -->
    <div class="container pt-[40px] lg:pt-0 z-10 relative">
        

    <div class="relative lg:absolute top-0 right-0   lg:w-3/5 bg-white pt-6 lg:pt-5 lg:pl-[100px]">
            <div class="lg:w-[70%] font-bold text-[32px] lg:text-[40px] lg:mb-[10px] lg:mt-[100px]">
                <h2>
                    <?php echo $title ?>
                </h2>
            </div>

            <div>
                <div class=" text-primary text-[20px] lg:text-[32px] font-normal leading-[170%]">
                    <?php echo $heading ?>
                </div>
            </div>
            <div class="[&>:not(:last-child)]:border-b leading-[170%]">
                <?php foreach($items as $item): ?>
                <div class="border-primary lg:py-5 flex flex-col lg:flex-row lg:space-x-5">
                    <div class="lg:w-full mt-3 mb-3 lg:mt-0 text-[16px] lg:text-[20px]">
                        <?php echo $item['content']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="border-primary lg:py-5 flex flex-col lg:flex-row lg:space-x-5">
                </div>
            </div>
        </div>
    </div>
    
    <div class="lg:w-3/5 pt-[40px] lg:py-0 lg:absolute left-0 top-0 h-full overflow-hidden ">
        <div class="flex items-end h-full">
            <img class="object-cover h-auto lg:h-[636px] w-full lg:w-[96%]" src="<?php echo $image_url?>" alt="" />
        </div>
    </div>
</div>