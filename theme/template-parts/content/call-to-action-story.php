<?php
$title = $args['title'] ?? 'Default Title';
$heading = $args['heading'] ?? 'Default Heading';
$content = $args['content'] ?? 'Default Content';
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? '';
$image_url = $args['image_url'] ?? '';
?>
<div class=" py-[40px] px-24 lg:px-0 lg:py-[100px] relative">

    <div class=" lg:pl-[150px] text-[36px] w-full lg:w-1/2 lg:mb-0">
        <div class="mb-6 lg:mb-5 text-[32px] lg:text-[40px] font-bold">
            <?php echo $title ?>
        </div>
        <div class="mb-6 lg:mb-5 text-[20px] lg:text-[32px] text-primary">
            <?php echo $heading ?>
        </div>
        <div class="text-[16px] lg:text-[20px] leading-[170%] lg:pb-[100px]">
            <?php echo $content ?>
        </div>
        <a href="/contact/" class="btn font-bold lg:w-fit w-full">
                    <?php echo $cta_text; ?>
                </a>
    </div>
    <div class="absolute lg:h-full bottom-0 lg:top-[0px] right-0   overflow-hidden lg:block hidden">
        <img class="h-full py-16 scale-150 lg:scale-100" src="<?php echo $image_url;  ?>" />
    </div>
</div>