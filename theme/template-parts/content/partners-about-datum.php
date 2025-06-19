<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? 'Default Content';
$image_url = $args['image_url'] ?? '';
$bg_image_url = $args['bg_image_url'] ?? '';
?>

<div class="relative bg-gradient-to-r from-secondary to-primary">
    <img class="absolute top-0 h-full right-0 object-cover" src="<?php echo get_assets_from_path('images/partners_bg.png') ?>" alt="" />
    <div class="container py-10 lg:py-[120px] xl:py-[190px] z-10 relative">
        <div class="flex flex-col-reverse lg:flex-row lg:gap-20 w-full">
            <div class="lg:w-1/2 text-white flex flex-col justify-center">
                <h2 class="font-[700] text-[28px] md:text-[32px] lg:text-[36px] xl:text-[40px] mb-6 lg:mb-12 lg:ml-12 lg:mt-6">
                    Our Partners
                </h2>
                <div class="text-[16px] lg:ml-12 lg:text-[20px] font-Regular leading-[170%] mb-6 lg:mb-12">
                    At Datum, we foresee potential challenges and proactively address them. By partnering with AWS, we
                    ensure that our technology solutions are seamlessly integrated with your business strategy, creating a comprehensive roadmap that paves the way for sustainable growth and success.
                </div>
            </div>
            <div class="py-10 lg:py-0 lg:w-1/2 lg:mb-20 flex flex-col items-center">
                
                <div class="flex justify-center gap-4">
                    <img class="w-[140px] h-[140px] md:w-[180px] md:h-[180px] lg:w-[390px] lg:h-[390px]  " 
                        src="<?php echo get_assets_from_path('images/aws-partner-1.png') ?>" alt="Partner 1" />
                    <img class="w-[100px] h-[100px] md:w-[180px] md:h-[180px] lg:w-[280px] lg:h-[280px] lg:-ml-[50px] lg:mt-[82px] -ml-[30px] mt-[30px]" 
                        src="<?php echo get_assets_from_path('images/aws-partner-2.png') ?>" alt="Partner 2" />
                </div>
                
                <div class="-mt-[35px] md:mt-[-70px] lg:-mt-[90px]  ml-[40px] md:ml-[70px] lg:ml-[110px]">
                    <img class="w-[100px] h-[100px] md:w-[180px] md:h-[180px] lg:w-[280px] lg:h-[280px] " 
                        src="<?php echo get_assets_from_path('images/aws-partner-3.png') ?>" alt="Partner 3" />
            </div>
        </div>
    </div>
</div>