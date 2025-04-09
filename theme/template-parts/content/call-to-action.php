<?php
$title = $args['title'] ?? 'Default Title';
$content = $args['content'] ?? 'Default Content';
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? '';
$image_url = $args['image_url'] ?? '';
?>
<div class="relative pt-[100px]">
    <div class="flex justify-end container">
        <div class="max-w-[60%]">
            <img class="object-contain" src="<?php echo $image_url;  ?>" />
        </div>
    </div>
    <div class="absolute w-full top-[100px]">
        <div class="container">
            <div class="w-full lg:w-1/2">
                <div class="mb-12 lg:text-[36px] text-Regular">
                    <?php echo $content ?>
                </div>
                <a href="<?php echo $cta_link; ?>" class="btn">
                    <?php echo $cta_text; ?>
                </a>
            </div>
            <!--    -->
            <!--    <div class="absolute lg:h-full bottom-0 lg:top-0 right-0 overflow-hidden lg:overflow-visible ml-8 mt-8">-->
            <!--        <img class="w-full h-auto object-contain py-14" src="--><?php //echo $image_url;  ?><!--" />-->
            <!--    </div>-->

        </div>
    </div>

</div>
