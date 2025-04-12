<?php
$title = $args['title'] ?? 'Default Title';
$content = $args['content'] ?? 'Default Content';
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? '';
$image_url = $args['image_url'] ?? '';
?>
<div class="relative pt-[60px] lg:pt-[100px]">
    <div class="lg:absolute w-full lg:top-[100px] relative z-10">
        <div class="container ">
            <div class="w-full lg:w-[55%]">
                <div class="mb-12 lg:text-[36px] text-[24px] text-Regular ">
                    <?php echo $content ?>
                </div>
                <a href="<?php echo $cta_link; ?>" class="btn font-bold text-[14px] lg:text-[16px]">
                    <?php echo $cta_text; ?>
                </a>
            </div>
        </div>
    </div>
    <div class="flex justify-end container -mt-[20px] ">
        <div class="lg:max-w-[60%] lg:py-2">
            <img class="lg:object-contain" src="<?php echo $image_url;  ?>" />
        </div>
    </div>

</div>
