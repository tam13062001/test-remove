
<div class="py-[60px] lg:py-[100px] mx-auto px-4 xl:px-0 lg:mt-20">
    <h1 class="container font-[700] text-[40px] mb-5 lg:mb-[50px]">
        Building from the ground up
    </h1>


    <?php
    $props = array(
        'data' => array(
            array(
                'title' => 'Modernizing legacy systems for seamless integration',
                'image_url' => get_assets_from_path('images/slide-digital1.jpg')
            ),
            array(
                'title' => 'Enhancing business agility with digital innovation',
                'image_url' => get_assets_from_path('images/slide-digital2.jpg')
            ),
            array(
                'title' => 'Driving operational efficiency and customer engagement ',
                'image_url' => get_assets_from_path('images/slide-digital3.jpg')
            )
        ),
        'slidesPerView' => 2.5,
    );
    render_rocket_block('card-slider', $props);
    ?>
</div>