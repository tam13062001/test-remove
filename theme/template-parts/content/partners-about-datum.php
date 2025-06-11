<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? 'Default Content';
$image_url = $args['image_url'] ?? '';
$bg_image_url = $args['bg_image_url'] ?? '';
?>

<div class="relative bg-gradient-to-r from-secondary to-primary">
    <img class="absolute top-0 h-full right-0" src="<?php echo get_assets_from_path('images/partners_bg.png') ?>" alt="" />
    <div class="container py-10 lg:py-[190px] z-10 relative">
        <div class="flex flex-col-reverse lg:flex-row lg:gap-20 lg:w-full">
            <div class="lg:w-1/2 text-white">
                <h2 class="font-[700] text-[32px] lg:text-[40px] mb-6 lg:mb-12 lg:ml-12 lg:mt-6">
                    Our Partners
                </h2>
                <div class="text-[16px] lg:ml-12 lg:text-[20px] font-Regular leading-[170%] mb-6 lg:mb-12">
                    At Datum, we foresee potential challenges and proactively address them. By partnering with AWS, we
                    ensure that our technology solutions are seamlessly integrated with your business strategy, creating a comprehensive roadmap that paves the way for sustainable growth and success.
                </div>
            </div>
            <div class="py-10 lg:py-0 lg:w-1/2 lg:mb-20 flex flex-col items-center">
    <!-- Hàng trên: 2 hình -->
    <div class="flex">
        <img class=" lg:w-[391x] lg:h-[391px] -mt-[50px] lg:-mt-[100px]" 
             src="<?php echo get_assets_from_path('images/aws-partner-1.png') ?>" alt="Partner 1" />
        <img class=" lg:w-[277px] lg:h-[277px] -ml-[30px] -mt-[15px]" 
             src="<?php echo get_assets_from_path('images/aws-partner-2.png') ?>" alt="Partner 2" />
    </div>

    <!-- Hình dưới ở giữa, dịch lên một chút -->
    <div class="mt-[-90px] ml-[210px]">
        <img class=" lg:w-[290px] lg:h-[290px]" 
             src="<?php echo get_assets_from_path('images/aws-partner-3.png') ?>" alt="Partner 3" />
    </div>
</div>

        </div>
    </div>
</div>
