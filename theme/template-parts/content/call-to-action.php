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
                <div class="mb-12 lg:text-[32px] text-[24px] text-Regular ">
                    <?php echo datum_translate($content); ?>
                </div>
                <a href="/contact/" class="btn font-bold lg:w-fit w-full">
                    <?php echo datum_get_translation($cta_text); ?>
                </a>
            </div>
        </div>
    </div>
    <div class="flex justify-end container lg:-mt-[20px] mt-[10px]">
        <div class="lg:max-w-[60%] lg:py-2">
            <img class="lg:object-contain" src="<?php echo $image_url;  ?>" />
        </div>
    </div>

</div>
