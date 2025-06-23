<?php
$title = $args['title'] ?? '';
$heading = $args['heading'] ?? '';
$items = $args['items'] ?? array();
$image_url = $args['image_url'] ?? '';
?>

<div class="flex flex-col lg:flex-row justify-between lg:min-h-[600px] lg:mb-[88px]">
    <!-- Hình ảnh bên trái -->
    <div class="w-full lg:w-1/2 flex items-end justify-center mt-8 lg:mt-0 min-h-[220px] lg:min-h-[636px] hidden lg:block">
        <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo $image_url?>" alt="" />
    </div>

    <!-- Content bên phải -->
    <div class="container w-full lg:w-1/2 pt-[40px] lg:pt-0 z-10 flex items-center">
        <div class="w-full bg-white">
            <div class="font-bold text-[32px] lg:text-[40px] mb-6">
                <h2>
                    <?php echo $title ?>
                </h2>
            </div>
            <div>
                <div class="text-primary text-[20px] lg:text-[32px] font-normal leading-[170%] mb-4">
                    <?php echo $heading ?>
                </div>
            </div>
            <div class="leading-[170%]">
                <?php foreach($items as $item): ?>
                <div class="border-primary py-3 lg:py-5 flex flex-col lg:flex-row lg:space-x-5 border-b">
                    <div class="w-full text-[16px] lg:text-[20px]">
                        <?php echo $item['content']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="w-full lg:w-1/2 flex items-end justify-center mt-8 lg:mt-0 min-h-[220px] lg:min-h-[636px] block lg:hidden">
        <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo $image_url?>" alt="" />
    </div>
</div>