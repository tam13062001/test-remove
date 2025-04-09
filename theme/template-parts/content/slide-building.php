<?php
$title = $args['title'] ?? '';
$data = $args['data'] ?? array();
?>
<div class="py-[60px] lg:py-[100px] mx-auto px-4 xl:px-0">
    <h1 class="container font-[700] text-[32px] lg:text-[40px] mb-5 lg:mb-[50px]">
        <?php echo $title; ?>
    </h1>

    <?php
    $props = array(
        'data' => $data,
        'slidesPerView' => 'auto',
    );
    render_rocket_block('card-slider', $props);
    ?>
</div>