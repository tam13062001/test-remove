<?php

?>

<div class=" py-[50px] relative min-h-[600px] overflow-hidden">
    <div class="container lg:pt-[50px] lg:pb-0 pb-[50px]">
        <div class="text-[32px] lg:text-[36px]">
            Open Positions
        </div>
    </div>
    <div class="hidden lg:block lg:absolute -top-[330px] right-0 w-[500px] h-[350px] translate-x-1/3 z-[-1]">
        <img class="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/Group 62.png' ?>" />
    </div>
    <div class=" z-10"><?php render_rocket_block('job'); ?></div>
</div>