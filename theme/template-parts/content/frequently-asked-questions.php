<?php
$items = $args['items'] ?? array();
$text_title = $args['text_title'] ?? '';
?>

<div class="container lg:py-[50px]">
    <h2 class="font-[700] text-[40px] mb-10 lg:mb-[110px]">
        Frequently Asked Questions
    </h2>
    <div class="mb-10 lg:mb-[60px]">
        <?php foreach ($items as $item): ?>
            <div class="py-2 border-b border-primary">
                <?php render_rocket_block('collapse-block', $item); ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="font-bold lg:text-[16px] flex flex-col lg:flex-row lg:space-x-4 space-y-4 lg:space-y-0 lg:items-center">
        <a class="btn" href='/contact/'>
            More FAQs on our <?php echo $text_title ?> Services
        </a>
        <a href='/contact/' class="text-[16px] text-secondary ">
            or Schedule a consultation with our expert <i class="fa fa-chevron-right"></i>
        </a>
    </div>

</div>
