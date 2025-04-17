<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? 'Default Content';
$image_url = $args['image_url'] ?? '';
$bg_image_url = $args['bg_image_url'] ?? '';
?>
<div class="py-[60px] lg:py-[80px]">
    <div class="container mb-[50px] lg:mb-[100px]">
        <h2 class="text-[32px] lg:text-[40px] font-bold">
            Locations
        </h2>
    </div>
    <div class="relative">
        <!-- Desktop Image (Right Side) -->
        <div class="lg:block lg:w-1/2 lg:absolute right-0 top-0 lg:h-[710px] overflow-hidden">
            <div class="flex lg:items-end h-full">
                <img class="object-cover h-auto w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_8.png' ?>" alt="" />
            </div>
        </div>

        <!-- Content Container -->
        <div class="container relative lg:pt-[50px] lg:py-[100px] -mt-10">
            <?php
            $data = array(
                array(
                    'country' => 'New Zealand',
                    'locations' => array(
                        array(
                            'title' => 'Datum Limited',
                            'address' => '70 Symonds Street, 1010 Auckland, New Zealand'
                        )
                    ),
                    'open' => true

                ),
                array(
                    'country' => 'Australia',
                    'locations' => array(
                        array(
                            'title' => 'Datum Consulting AU PTY LTD',
                            'address' => 'Level 1, 8 Beulah Road, Norwood SA 5067 Adelaide, Australia'
                        )
                    )

                ),
                array(
                    'country' => 'Vietnam',
                    'locations' => array(
                        array(
                            'title' => 'Datum Consulting VN Company LTD',
                            'address' => '52-54-56 E. B2, Sala Residential Area, District 2 (now Thu Duc), Ho Chi Minh City 700000, Vietnam'
                        )
                    )
                ),
                array(
                    'country' => 'Philippines',
                    'locations' => array(
                        array(
                            'title' => 'Datum Consulting Philippines, Inc.',
                            'address' => '7th Floor, Unit B, Center, 8 Rockwell Dr, Makati, 1209 Metro Manila, Philippines'
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
