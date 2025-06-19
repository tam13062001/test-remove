<?php
$title = $args['title'] ?? '';
$news_items = $args['news_items'] ?? array();
?>

<div class="container py-[40px] lg:py-[120px]">
    <?php if ($title): ?>
        <h2 class="text-[32px] lg:text-[40px] text-[26px] font-bold mb-[53px]"><?php echo $title; ?></h2>
    <?php endif; ?>
    
    <div class="grid grid-cols-1 lg:grid-cols-2  gap-5">
        <?php foreach($news_items as $item): ?>
        <div class="border-b border-secondary">
            <div class="flex flex-col lg:justify-between lg:py-12 py-4 lg:px-8 px-5 lg:text-[24px] text-[16px] font-[700] text-primary  bg-gradient-to-r from-secondary/20 to-primary/20 h-[140px] lg:h-[220px]">
                <div class="text-[14px] lg:text-[16px] font-bold text-blue-600 mb-4 lg:mb-0">
                    <?php echo $item['title']; ?>
                </div>
                <div class="flex justify-start">
                    <p class="text-black text-[14px] lg:text-[16px] font-bold">
                        <?php echo $item['date']; ?>
                    </p>
                </div>
            </div>
            <div class="lg:h-[333px] h-auto flex items-center justify-center">
                <img class="h-auto lg:h-[333px] w-full " src="<?php echo $item['image_url']; ?>" alt="<?php echo $item['title']; ?>" />
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>