<?php
$title = $args['title'] ?? '';
$data = $args['data'] ?? array();
?>
<div class="container lg:py-[100px] py-[40px]">
	<h1 class="font-[700] text-[24px] lg:text-[40px] mb-2 lg:mb-[50px]">
		<?php echo $title; ?>
	</h1>		
</div>

<div class="py-[60px] lg:py-[50px] mx-auto px-4 xl:px-0">
    <?php
    $props = array(
        'data' => $data,
        'slidesPerView' => 'auto',
    );
    render_rocket_block('card-swiper', $props);
    ?>
</div>
