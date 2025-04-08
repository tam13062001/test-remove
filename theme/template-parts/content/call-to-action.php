<?php
$title = $args['title'] ?? 'Default Title';
$content = $args['content'] ?? 'Default Content';
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? '';
$image_url = $args['image_url'] ?? '';
?>
<div class="container py-[60px] lg:py-[100px] relative">
    <div class="absolute lg:h-full bottom-0 lg:top-0 right-0 overflow-hidden lg:overflow-visible">
        <img class="h-full py-16 lg:scale-150 scale-70" src="<?php echo $image_url;  ?>" />
    </div>
    <div class="text-[36px] w-full lg:w-1/2 mb-[300px] lg:mb-0 relative">
        <div class="mb-12 text-[24px]">
            <?php echo $content ?>
        </div>
        <a href="<?php echo $cta_link; ?>" class="btn">
            <?php echo $cta_text; ?>
        </a>
    </div>
</div>