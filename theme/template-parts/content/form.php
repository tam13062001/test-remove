<?php
$title = $args['title'] ?? 'Default Title';
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? 'Submit';
$image_url = $args['image_url'] ?? '';
?>

<div class="container py-[60px] lg:py-[100px]">
    
    <div class="flex flex-col lg:flex-row w-full lg:space-x-[100px]">
        <div class="w-full lg:w-1/2">
            <?php render_rocket_block('contact-form'); ?>
        </div>

        <div class="w-full lg:w-1/2 hidden lg:block">
            <img src="<?php echo $image_url; ?>" class="w-full object-contain" />
        </div>
    </div>

</div>


