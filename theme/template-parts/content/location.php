<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? 'Default Content';
$image_url = $args['image_url'] ?? '';
$bg_image_url = $args['bg_image_url'] ?? '';
?>
<div class="py-[60px] lg:py-[80px]">
    <div class="container mb-[50px] lg:mb-[100px]">
        <h2 class="text-[32px] lg:text-[40px] font-bold">
            <?php echo datum_translate('locations.title') ?>
        </h2>
    </div>
    <div class="relative">
        <!-- Desktop Image (Right Side) -->
        <div class="lg:block lg:w-1/2 lg:absolute right-0 top-0 lg:h-[710px] overflow-hidden">
            <div class="top-0 left-0 w-full z-10">
                <img class="object-cover h-auto w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_8.png' ?>" alt="" />
            </div>
        </div>

        <!-- Content Container -->
        <div class="container relative lg:pt-[50px] lg:py-[100px] -mt-10">
            <?php
            $data = array(
                array(
                    'country' =>  datum_translate('footer.new_zealand.country'),
                    'locations' => array(
                        array(
                            'title' => datum_translate('footer.new_zealand.company') ,
                            'address' => datum_translate('footer.australia.company') 
                        )
                    ),
                    'open' => true

                ),
                array(
                    'country' => datum_translate('footer.australia.country'),
                    'locations' => array(
                        array(
                            'title' => datum_translate('footer.australia.company'),
                            'address' => datum_translate('footer.australia.address') 
                        )
                    )

                ),
                array(
                    'country' => datum_translate('footer.vietnam.country'),
                    'locations' => array(
                        array(
                            'title' => datum_translate('footer.vietnam.company') ,
                            'address' => datum_translate('footer.vietnam.address')
                        )
                    )
                ),
                array(
                    'country' => datum_translate('footer.philippines.country'),
                    'locations' => array(
                        array(
                            'title' => datum_translate('footer.philippines.company'),
                            'address' => datum_translate('footer.philippines.address')
                        )
                    )
                )
            );
            ?>
            <div class="w-full lg:w-3/5">
                <div class="bg-lightblue px-8 lg:px-[115px] py-4 lg:py-20 [&>:not(:last-child)]:border-b [&>:not(:last-child)]:border-white">
                    <?php foreach($data as $item) {
                        render_rocket_block('location-item', $item);
                    } ?>
                </div>
            </div>
        </div>

    </div>

</div>
