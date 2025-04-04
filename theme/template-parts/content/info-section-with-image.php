<?php
$title = $args['title'] ?? '';
$items = $args['items'] ?? array();
$image_url = $args['image_url'] ?? '';
?>

<div class="relative lg:min-h-[880px] mb-20">
    <div class="container pt-[50px] lg:py-[100px] z-10 relative">
        <h2 class="font-[700] text-[40px] mb-6 lg:mb-10">
            <?php echo $title ?>
        </h2>
        <div class="lg:w-1/2 bg-white lg:py-10 lg:pr-[100px] leading-[170%]">
            <?php foreach($items as $item): ?>
            <div class="mb-10">
                <?php if(!empty($item['title'])) {?>
                    <div class="text-primary text-[24px] font-[700] mb-5">
                        <?php echo $item['title'] ?>
                    </div>
                <?php } ?>
                <div><?php echo $item['content']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="lg:w-3/5 lg:absolute right-0 top-0 h-full overflow-hidden">
        <div class="flex items-end h-full">
            <img class="object-cover h-auto w-full" src="<?php echo $image_url?>" alt="" />
        </div>
    </div>
</div>

