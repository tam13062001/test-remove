<?php
$title = $args['title'] ?? 'Default Title';
$heading = $args['heading'] ?? '';
$content = $args['content'] ?? 'Default Content';
$items = $args['items'] ?? array();
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? '';
$image_url = $args['image_url'] ?? '';
?>
<div class="py-[40px] lg:py-0 lg:pt-[100px] relative">
    <div class="container">
        <div class="text-[36px]  lg:mb-0">
            <div class="w-full mb-6 lg:mb-5 text-[32px] lg:text-[40px] font-bold">
                <?php echo $title ?>
            </div>
            <div class="w-full lg:w-3/5 mb-6 lg:mb-5 text-[20px] lg:text-[32px] text-primary">
                <?php echo $heading ?>
            </div>
            <div class="w-full lg:w-4/5 text-[16px] lg:text-[20px] leading-[170%] ">
                <?php foreach($items as $item): ?>
                <div class="flex flex-col  ">

                    <div class="py-4  w-full text-[16px] lg:text-[24px] font-bold">
                        <?php echo $item['title']; ?>
                    </div>

                    <div class="py-4  w-[785px] text-[16px] lg:text-[20px] font-regular">
                        <?php echo $item['content']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- <a href="/contact/" class="btn font-bold lg:w-fit w-full">
                <?php echo $cta_text; ?>
            </a> -->
        </div>
    </div>
    <div class="absolute lg:h-[650px] bottom-0 lg:top-[0px] right-0   overflow-hidden lg:block hidden">
        <img class="h-full py-16 scale-150 lg:scale-100" src="<?php echo $image_url;  ?>" />
    </div>
</div>