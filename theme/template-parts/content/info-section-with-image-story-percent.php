<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$percent = $args['percent'] ?? '';
$percent_content = $args['percent_content'] ?? '';
$image_url = $args['image_url'] ?? '';
?>

<div class=" my-[44px] lg:my-[188px]">
    <div class="flex flex-col lg:flex-row items-stretch">
        <!-- Content bên trái -->
        <div class="container w-full lg:w-1/2 flex flex-col  justify-center bg-white pt-6 lg:pt-[60px] lg:pr-[60px]">
            <h2 class="font-[700] text-[30px] lg:text-[40px] mt-[24px] mb-6">
                <?php echo $title ?>
            </h2>
            <div class="text-[16px] lg:text-[20px] font-normal leading-[170%] mb-8">
                <?php echo $content; ?>
            </div>
            <div class="pt-6 lg:pt-[20px]">
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-6
                    <?php if (empty($percent) && empty($percent_content)) echo ''; else echo 'border-y border-primary py-6'; ?>">
                    <div class="flex flex-col lg:flex-row items-center relative">
                        <div class="relative text-[56px] lg:text-[96px] leading-[170%] mr-0 lg:mr-5
                            bg-gradient-to-r from-secondary to-primary text-transparent bg-clip-text">
                            <?php echo $percent; ?>
                        </div>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start leading-[170%] text-[20px] lg:text-[24px] text-primary font-bold">
                        <?php echo $percent_content; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hình bên phải -->
        <div class="w-full lg:w-1/2 flex items-end justify-center mt-8 lg:mt-0">
            <img class="object-cover w-full h-[220px] lg:h-[750px] " src="<?php echo $image_url?>" alt="" />
        </div>
    </div>
</div>