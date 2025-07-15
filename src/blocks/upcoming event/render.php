<?php
$title = $attributes['title'] ?? '';
$tag = $attributes['tag'] ?? '';
$headline = $attributes['headline'] ?? '';
$day = $attributes['day'] ?? '20';
$month = $attributes['month'] ?? 'MAY';
$year = $attributes['year'] ?? '2025';
$image_url = $attributes['image_url'] ?? get_assets_from_path('images/Upcoming.png');
?>

<div class="relative lg:min-h-[550px] bg-white">
    <div class="container">
        <h2 class="text-[32px] lg:text-[36px] mb-10 lg:mb-[100px]"><?php echo esc_html($title); ?></h2>
    </div>
    <div class="relative lg:h-[550px] lg:flex items-center">
        <div class="container z-10 relative">
            <div class="w-full lg:w-1/2 bg-white pb-[75px]">
                <div class="mb-4 lg:mb-[75px]">
                    <span class="inline-block bg-[#1976f2] text-white lg:text-[16px] text-[14px] font-bold px-3 py-3 uppercase">
                        <?php echo esc_html($tag); ?>
                    </span>
                </div>
                <div class="text-black text-[24px] lg:text-[36px] font-bold leading-[140%] mb-5">
                    <?php echo esc_html($headline); ?>
                </div>
                <div class="text-[#1976f2] text-[24px] lg:text-[32px] font-medium leading-none flex space-x-2">
                    <span class="lg:text-[64px] text-[36px] font-regular"><?php echo esc_html($day); ?></span>
                    <div class="flex flex-col text-[14px] lg:text-[20px] font-medium leading-[1] lg:mt-[10px]">
                        <span><?php echo esc_html($month); ?></span>
                        <span class="border-b-[5px] border-blue-500"><?php echo esc_html($year); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute right-0 top-0 h-full lg:w-3/5">
            <img class="object-cover h-full w-full" src="<?php echo esc_url($image_url); ?>" alt="Event" />
        </div>
    </div>
</div>
