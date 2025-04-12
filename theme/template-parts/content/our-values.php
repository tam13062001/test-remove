<?php
$title = $args['title'] ?? '';
$items = $args['items'] ?? array();
$image_url = $args['image_url'] ?? '';
?>


<section class="flex flex-col md:flex-row">
    <div class="w-full md:w-1/2 aspect-square">
        <img src="<?php echo $image_url  ?>" alt="<?php echo $title; ?>" class="h-full w-full object-cover" />
    </div>

    <!-- Right content area -->

    <div class="container md:w-1/2 bg-[#C4E1F5] lg:px-[125px] lg:py-[100px] py-[60px]">
        <h2 class="text-[32px] lg:text-[40px] font-bold mb-5 lg:mb-8">
            <?php echo $title; ?>
        </h2>

        <div class="[&>:not(:last-child)]:border-b [&>:not(:last-child)]:border-white">
            <?php
            foreach($items as $index => $item) {
                render_rocket_block('our-value-item', $item);
            }
            ?>
        </div>
    </div>
</section>