<?php
$title = $args['title'] ?? '';
$heading = $args['heading'] ?? '';
$content = $args['content'] ?? '';
$percent = $args['percent'] ?? '';
$percent_content = $args['percent_content'] ?? '';
$image_url = $args['image_url'] ?? '';
$items = $args['items'] ?? array();
?>

<div class=" my-[44px] lg:my-[88px]">
    <div class="flex flex-col lg:flex-row items-stretch">
        <!-- Hình bên trái -->
        <div class="w-full lg:w-1/2 flex items-end justify-center pt-[40px] lg:pt-0 min-h-[220px] lg:min-h-[636px] hidden lg:block">
            <img class="object-cover w-full h-[220px] lg:h-full " src="<?php echo $image_url?>" alt="" />
        </div>
        <!-- Content bên phải -->
        <div class="container w-full lg:w-1/2 flex flex-col justify-center bg-white pt-6 lg:pt-5 lg:pl-[60px] min-h-[220px] lg:min-h-[636px]">
            <div class="font-bold text-[32px] lg:text-[40px] mb-6 lg:mb-[10px]">
                <h2>
                    <?php echo $title ?>
                </h2>
            </div>
            <div>
                <div class="text-primary text-[16px] lg:text-[32px] leading-[150%] mb-4">
                    <?php echo $heading ?>
                </div>
            </div>
            <div class="mb-6">
                <?php foreach($items as $item): ?>
                    <div class="py-3 lg:py-5 flex flex-col lg:flex-row lg:space-x-5 border-b last:border-b-0">
                        <div class="w-full text-[16px] lg:text-[20px]">
                            <?php echo $item['content']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-6
                <?php if (empty($percent) && empty($percent_content)) echo ''; else echo 'border-y border-primary py-6'; ?>">
                <div class="flex flex-col lg:flex-row items-center relative w-full">
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

        <div class="w-full lg:w-1/2 flex items-end justify-center pt-[40px] lg:pt-0 min-h-[220px] lg:min-h-[636px] block lg:hidden">
            <img class="object-cover w-full h-[220px] lg:h-full " src="<?php echo $image_url?>" alt="" />
        </div>
    </div>
</div>