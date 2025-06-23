<?php
$title = $args['title'] ?? '';
$heading = $args['heading'] ?? '';
$content = $args['content'] ??  '';
$image_url = $args['image_url'] ?? '';
?>

<div class=" my-[44px] lg:my-[88px]">
    <div class="flex flex-col lg:flex-row items-stretch">
        <!-- Ảnh bên trái -->
        <div class="w-full lg:w-1/2 flex items-end justify-center pt-[40px] lg:pt-0 min-h-[220px] lg:min-h-[636px] hidden lg:block">
            <img class="object-cover w-full h-[220px] lg:h-full " src="<?php echo $image_url?>" alt="" />
        </div>
        <!-- Content bên phải -->
        <div class="container w-full lg:w-1/2 flex flex-col justify-center bg-white pt-6 lg:pt-[60px] lg:pl-[100px] min-h-[220px] lg:min-h-[636px]">
            <div class="font-bold text-[32px] lg:text-[40px] mb-6 lg:mb-[10px]">
                <h2>
                    <?php echo $title ?>
                </h2>
            </div>
            <div>
                <div class="text-primary text-[16px] lg:text-[32px] font-normal leading-[170%]">
                    <?php echo $heading ?>
                </div>
            </div>
            <div class="pt-6 lg:pt-5 text-[16px] lg:text-[20px] font-normal leading-[170%]">
                <?php echo $content; ?>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-end justify-center pt-[40px] lg:pt-0 min-h-[220px] lg:min-h-[636px] block lg:hidden">
            <img class="object-cover w-full h-[220px] lg:h-full " src="<?php echo $image_url?>" alt="" />
        </div>
    </div>
</div>
