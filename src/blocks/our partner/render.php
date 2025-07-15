<?php
$title = $attributes['title'] ?? 'our_partners.title';
$content = $attributes['content'] ?? 'our_partners.content';
$image1 = $attributes['image1'] ?? get_assets_from_path('images/aws-partner-1.png');
$image2 = $attributes['image2'] ?? get_assets_from_path('images/aws-partner-2.png');
$image3 = $attributes['image3'] ?? get_assets_from_path('images/aws-partner-3.png');
?>

<div class="relative bg-gradient-to-r from-secondary to-primary">
    <img class="absolute top-0 h-full right-0" src="<?php echo get_assets_from_path('images/partners_bg.png') ?>" alt="" />
    <div class="container py-10 lg:py-[120px] z-10 relative">
        <div class="flex flex-col-reverse lg:flex-row lg:gap-20 ">
            <div class="lg:w-1/2 text-white">
                <h2 class="font-[700] text-[32px] lg:text-[36px] mb-6 lg:mb-12 lg:mt-6">
                    <?php echo datum_translate($title); ?>
                </h2>
                <div class="text-[16px] lg:text-[20px] font-Regular leading-[170%] mb-6 lg:mb-12">
                    <?php echo datum_translate($content); ?>
                </div>
            </div>
            <div class="py-10 lg:py-0 lg:w-1/2 lg:mb-20 flex flex-col items-center">
                <div class="flex justify-center gap-4">
                    <img class="w-[140px] h-[140px] md:w-[280px] md:h-[280px] lg:w-[390px] lg:h-[390px]"
                         src="<?php echo esc_url($image1); ?>" alt="Partner 1" />
                    <img class="w-[100px] h-[100px] md:w-[180px] md:h-[180px] lg:w-[280px] lg:h-[280px] lg:-ml-[50px] lg:mt-[82px] -ml-[30px] mt-[30px] md:mt-[70px] md:-ml-[40px]"
                         src="<?php echo esc_url($image2); ?>" alt="Partner 2" />
                </div>

                <div class="-mt-[35px] md:mt-[-70px] lg:-mt-[90px] ml-[40px] md:ml-[90px] lg:ml-[110px]">
                    <img class="w-[100px] h-[100px] md:w-[180px] md:h-[180px] lg:w-[280px] lg:h-[280px]"
                         src="<?php echo esc_url($image3); ?>" alt="Partner 3" />
                </div>
            </div>
        </div>
    </div>
</div>
