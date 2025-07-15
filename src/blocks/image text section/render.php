<?php
$title = $attributes['title'] ?? '';
$heading = $attributes['heading'] ?? '';
$content = $attributes['content'] ?? '';
$image_url = $attributes['image_url'] ?? '';

?>
<div class="my-[44px] lg:my-[88px]">
    <div class="flex flex-col lg:flex-row items-stretch">
        <!-- Ảnh trái -->
        <div class="w-full lg:w-1/2 flex items-end justify-center pt-[40px] lg:pt-0 min-h-[220px] lg:min-h-[636px] hidden lg:block">
            <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo esc_url($image_url); ?>" alt="" />
        </div>
        <!-- Nội dung -->
        <div class="container w-full lg:w-1/2 flex flex-col justify-center bg-white pt-6 lg:pt-[60px] lg:pl-[100px] min-h-[220px] lg:min-h-[636px]">
            <div class="font-bold text-[32px] lg:text-[36px] mb-6 lg:mb-[10px]">
                <h2><?php echo esc_html($title); ?></h2>
            </div>
            <div class="text-primary text-[16px] lg:text-[32px] font-normal leading-[170%]">
                <?php echo esc_html($heading); ?>
            </div>
            <div class="pt-6 lg:pt-5 text-[16px] lg:text-[20px] font-normal leading-[170%]">
                <?php echo wp_kses_post($content); ?>
            </div>
        </div>
        <!-- Ảnh mobile -->
        <div class="w-full lg:w-1/2 flex items-end justify-center pt-[40px] lg:pt-0 min-h-[220px] lg:min-h-[636px] block lg:hidden">
            <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo esc_url($image_url); ?>" alt="" />
        </div>
    </div>
</div>
