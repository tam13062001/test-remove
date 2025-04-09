<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? 'Default Content';
$image_url = $args['image_url'] ?? '';
$bg_image_url = $args['bg_image_url'] ?? '';
?>

<div class="relative bg-gradient-to-r from-secondary to-primary">
    <img class="absolute top-0 h-full right-0" src="<?php echo get_assets_from_path('images/partners_bg.png') ?>" alt="" />
    <div class="container py-10 lg:py-[250px] z-10 relative">
        <div class="flex flex-col-reverse lg:flex-row lg:gap-20 ">
            <div class="lg:w-1/2 text-white">
                <h2 class="font-[700] text-[32px] lg:text-[40px] mb-6 lg:mb-12 lg:ml-12 lg:mt-6">
                    Our Partners
                </h2>
                <div class=" text-[20px] lg:ml-12 lg:text-[20px] font-Regular leading-[170%] mb-6 lg:mb-12">
                    At Datum, we foresee potential challenges and proactively address them. By partnering with AWS, we
                    ensure that our technology solutions are seamlessly integrated with your business strategy, creating a comprehensive roadmap that paves the way for sustainable growth and success.
                </div>
            </div>
            <div class="py-10 lg:py-0 lg:w-1/2 lg:ml-12 lg:mb-20 text-right">
                <img class="inline-block w-[200px] h-[200px] lg:w-[450px] lg:h-[450px] " src="<?php echo get_assets_from_path('images/aws-partner.png') ?>" alt="" />
            </div>
        </div>
    </div>
</div>
