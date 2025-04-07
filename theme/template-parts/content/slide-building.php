
<div class="py-[100px] mx-auto px-4 xl:px-0">
    <h1 class="container text-4xl xl:text-5xl font-bold text-gray-900 mb-16">
        Building from the ground up
    </h1>

    <?php
    $props = array(
        'data' => array(
            array(
                'title' => 'Improves security and compliance',
                'image_url' => get_assets_from_path('images/slide1.png')
            ),
            array(
                'title' => 'Increased development velocity',
                'image_url' => get_assets_from_path('images/slide2.png')
            ),
            array(
                'title' => 'Enhanced operational efficiency',
                'image_url' => get_assets_from_path('images/slide3.png')
            )
        )
    );
    render_rocket_block('card-slider', $props);
    ?>
</div>