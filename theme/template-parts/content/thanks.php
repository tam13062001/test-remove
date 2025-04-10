<?php
$title = $args['title'] ?? 'Default Title';
$content = $args['content'] ?? 'Default Content';
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? '';
$image_url = $args['image_url'] ?? '';
?>
<div class=" relative pt-[60px] lg:pt-[100px]">
    <div class="lg:absolute w-full lg:top-[100px] relative z-10">
        <div class="lg:ml-[100px] ">
            <div class="w-full lg:w-[55%]">
                <div class="mb-12 lg:text-[36px] text-[24px] text-Regular ">
                    <?php echo $content ?>
                </div>
                <a href="<?php echo $cta_link; ?>" class="text-[#3DA7F2] font-bold text-[14px] lg:text-[16px]">
                    <?php echo $cta_text; ?>
                    <span class="ml-1">
                            <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="flex justify-end container -mt-[30px] lg:ml-[40px] ">
        <div class="lg:max-w-[60%] lg:py-2">
            <img class="lg:object-contain" src="<?php echo $image_url;  ?>" />
        </div>
    </div>

</div>
