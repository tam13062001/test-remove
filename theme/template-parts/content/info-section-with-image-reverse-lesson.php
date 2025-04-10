<?php
$title = $args['title'] ?? '';
$heading = $args['heading'] ?? '';
$content = $args['content'] ??  '';
$image_url = $args['image_url'] ?? '';
?>

<div class="relative lg:min-h-[880px] lg:mb-[88px]">

    <div class="container pt-[40px] lg:pt-0 z-10 relative lg:translate-x-1/2">
        <div class="lg:w-1/2 font-bold text-[32px] lg:text-[40px] lg:pl-[115px]">
            <h2>
                <?php echo $title ?>
            </h2>
        </div>

        <div class="lg:w-1/2 bg-white pt-6 lg:pt-5 lg:pb-[80px] lg:pl-[115px]">
            <div class=>
                <div class=" text-primary text-[16px] lg:text-[32px] font-normal leading-[150%]">
                    <?php echo $heading ?>
                </div>
            </div>
            <div class="pt-6 lg:pt-5 text-[16px] lg:text-xl font-normal leading-[170%]">
                <?php echo $content; ?>
            </div>
        </div>
    </div>

    <div class="lg:w-3/5 pt-[40px] lg:py-0 lg:absolute left-0 top-0 h-full overflow-hidden container">
        <div class="flex items-end h-full">
            <img class="object-cover h-auto lg:h-[636px] w-full" src="<?php echo $image_url?>" alt="" />
        </div>
    </div>
</div>