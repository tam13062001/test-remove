<?php
$title = $args['title'] ?? '';
$heading = $args['heading'] ?? '';
$content = $args['content'] ??  '';
$image_url = $args['image_url'] ?? '';
?>

<div class="relative lg:min-h-[880px] bg-white pb-[60px]">

    <div class="container  lg:pt-[40px] z-10 relative">
        
        <div class="relative lg:absolute top-0 lg:top-52  left-0 lg:w-[55%] bg-white lg:-mt-[50px] lg:pl-[60px] lg:pb-[120px] pb-[40px] pr-[30px]">
            
            <div class="mb-4 lg:pb-[100px]">
                <span class="inline-block bg-[#1976f2] text-white lg:text-[16px] text-[14px] font-bold px-3 py-3 uppercase  ">Upcoming</span>
            </div>

            
            <div class="lg:w-[80%] text-black lg:text-[20px] text-[24px] lg:text-[40px] font-bold leading-[140%]">
                Headline sample for the upcoming Datum event.
            </div>

            
            <div class="lg:pt-20 pt-3 text-[#1976f2] text-[24px] lg:text-[32px] font-medium leading-none flex  space-x-2">
                <span class="lg:text-[64px] text-[36px] font-regular">20</span>
                <div class="flex flex-col text-[14px] lg:text-[20px] font-medium leading-[1] lg:mt-[10px]">
                    <span>MAY</span>
                    <span class="border-b-[5px] border-blue-500">2025</span>
                </div>

            </div>
        </div>
    </div>

    
    <div class="lg:mx-0 mx-4 py-0 lg:w-3/5 lg:py-[40px] lg:py-0 lg:absolute right-0 top-0 h-full overflow-hidden lg:-mt-[150px] lg:mt-0">
        <div class="flex items-end h-full">
            <img class="object-cover h-full w-full " src="<?php echo get_assets_from_path('images/Upcoming.png') ?>" alt="" />
        </div>
    </div>
</div>

