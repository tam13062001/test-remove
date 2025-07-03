<?php
$title = $args['title'] ?? 'Default Title';
$heading = $args['heading'] ?? "";
$content = $args['content'] ?? "";
$items = $args['items'] ?? array();
$image_url = $args['image_url'] ?? '';
?>

<div class="relative text-white ">
    <div class="lg:block hidden absolute top-0 left-0 right-0 h-full w-full bg-app-gradient">
        <img class="object-cover h-full w-full" src=" <?php echo $image_url  ?>" />
    </div>
    <div class="container relative py-[50px] lg:py-[142px]">
        <div class="text-[20px] lg:text-[24px] font-bold lg:w-[785px] text-[#000000]">
            <?php echo $title; ?>
        </div>
        <div class="text-[24px] lg:text-[40px] font-bold text-[#315CD4] lg:pb-0 pb-[40px]">
            <?php echo $heading; ?>
        </div>
        <div class="text-[18px] lg:text-[24px] font-bold lg:py-[40px] lg:w-[627px]  text-[#000000]">
            <?php echo $content; ?>
        </div>
    </div>

    <div class="container lg:hidden h-full w-full pb-[50px]">
        <img class="object-cover h-full w-full" src=" <?php echo $image_url  ?>" />
    </div>
</div>