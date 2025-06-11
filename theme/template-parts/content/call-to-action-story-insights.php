<?php
$title = $args['title'] ?? 'Default Title';
$heading = $args['heading'] ?? 'Default Heading';
$content = $args['content'] ?? 'Default Content';
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? '';
$image_url = $args['image_url'] ?? '';
?>
<div class="py-[40px] lg:py-[100px] relative">
    <div class="container relative flex flex-col lg:flex-row items-center justify-between">
        <div class="text-[36px] w-full lg:w-3/5 lg:mb-0">
            <div class="mb-6 lg:mb-5  lg:text-[16px] font-bold">
                <?php echo $title ?>
            </div>
            <div class="mb-6 lg:mb-5 text-[20px] lg:text-[36px] text-gray-800 font-regular">
                <?php echo $heading ?>
            </div>
            <div class="text-[16px] lg:text-[20px] leading-[170%] lg:pb-[100px] lg:mt-16">
                <?php echo $content ?>
            </div>
            <!-- <a href="/contact/" class="btn font-bold lg:w-fit w-full">
                <?php echo $cta_text; ?>
            </a> -->
            <div class="mt-8 lg:mt-12 lg:text-[20px] w-full">
                <p>Here are the more secular macro trends by segments in the Tech and Digital industry.</p>
            </div>
        </div>
        
    </div>
    <div class="absolute lg:h-full bottom-0 lg:top-[0px] right-0   overflow-hidden lg:block hidden">
        <img class="h-full py-16 scale-150 lg:scale-100" src="<?php echo $image_url;  ?>" />
    </div>
</div>