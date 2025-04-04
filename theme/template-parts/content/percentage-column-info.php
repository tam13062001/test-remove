<?php
$title = $args['title'] ?? '';
$items = $args['items'] ?? array();
?>

<div class="container py-8 lg:py-[100px]">
    <h2 class="font-[700] text-[24px] mb-10">
        <?php echo $title ?>
    </h2>
    <div class="grid grid-cols-2 gap-6">
        <?php foreach($items as $item): ?>
            <div class="flex flex-col lg:flex-row lg:items-center relative">
                <div class="relative text-[56px] lg:text-[96px] mr-5 mb-5 lg:mb-0 bg-gradient-to-r from-secondary to-primary text-transparent bg-clip-text">
                    <?php echo $item['percent']; ?>
                    <div class="absolute h-2 w-[60px] bg-primary bottom-0 left-0"></div>
                </div>
                <div class="leading-[170%]">
                    <?php echo $item['content']; ?>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>
