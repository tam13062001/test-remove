<?php
$title = $args['title'] ?? '';
$heading = $args['heading'] ?? '';
$content = $args['content'] ??  '';
$image_url = $args['image_url'] ?? '';
?>

<div class="relative lg:min-h-[550px] bg-white">
    <div class="container">
        <h2 class="text-[32px] lg:text-[36px] mb-10 lg:mb-[100px]"><?php echo datum_translate("events.title") ?></h2>
    </div>
    <div class="relative lg:h-[550px] lg:flex items-center">
        <div class="container z-10 relative">
            <div class="w-full lg:w-1/2 bg-white pb-[75px]">
                <div class="mb-4 lg:mb-[75px]">
                    <span class="inline-block bg-[#1976f2] text-white lg:text-[16px] text-[14px] font-bold px-3 py-3 uppercase"><?php echo datum_translate("events.tag") ?></span>
                </div>
                <div class="text-black text-[24px] lg:text-[40px] font-bold leading-[140%] mb-5">
                    <?php echo datum_translate("events.headline") ?>
                </div>
                <div class="text-[#1976f2] text-[24px] lg:text-[32px] font-medium leading-none flex  space-x-2">
                    <span class="lg:text-[64px] text-[36px] font-regular">20</span>
                    <div class="flex flex-col text-[14px] lg:text-[20px] font-medium leading-[1] lg:mt-[10px]">
                        <span>MAY</span>
                        <span class="border-b-[5px] border-blue-500">2025</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="lg:absolute right-0 top-0 h-full lg:w-3/5">
            <img class="object-cover h-full w-full " src="<?php echo get_assets_from_path('images/Upcoming.png') ?>" alt="" />
        </div>
    </div>
</div>

