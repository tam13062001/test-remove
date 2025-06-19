<?php
$title = $args['title'] ?? 'Default Title';
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? 'Submit';
?>

<div class="container py-[60px] lg:py-[100px]">
    
    <div class="flex flex-col lg:flex-row w-full lg:space-x-[100px]">
        <div class="w-full lg:w-1/2">
            <?php render_rocket_block('create-post-form'); ?>
        </div>
    </div>

</div>


