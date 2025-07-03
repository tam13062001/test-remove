<?php 
$title = $args['title'] ?? 'Success Stories in Banking';
$title_1 = $args['title_1'] ?? '';
$title_2 = $args['title_2'] ?? '';
?>
<div class="container py-[60px] lg:py-[120px]">
    <h2 class="font-[700] text-[32px] lg:text-[40px] mb-10 lg:mb-[80px]">
        <?php echo $title; ?>
    </h2>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="border-b border-secondary">
            <a href="/successful-stories/platform-customization/" class="flex items-center  lg:py-12 px-8 lg:text-[24px] text-[16px] font-[700] text-primary leading-[170%] bg-gradient-to-r from-secondary/20 to-primary/20 h-[140px] lg:h-[220px]">
                <?php echo $title_1; ?>
            </a>
            <div class="h-[333px] flex items-center justify-center">
                <img class="h-FULL lg:h-[93px] w-[80%] lg:w-[324px] " src="<?php echo get_assets_from_path('images/tyme-global.png') ?>" />
            </div>
        </div>
        <div class="border-b border-secondary">
            <a href="/successful-stories/premier-banking/" class="flex items-center lg:py-12 px-8 lg:text-[24px] text-[16px] font-[700] text-primary leading-[170%] bg-gradient-to-r from-secondary/20 to-primary/20 h-[140px] lg:h-[220px]">
                <?php echo $title_2; ?>
            </a>
            <div class="h-[333px] flex items-center justify-center">
                <img class="h-FULL w-[80%] lg:w-[324px] lg:h-[114px]" src="<?php echo get_assets_from_path('images/security-bank.png') ?>" />
            </div>
        </div>
    </div>
</div>