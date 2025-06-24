<?php
$title = $args['title'] ?? 'Locations';
$image_url = $args['image_url'] ?? get_stylesheet_directory_uri() . '/assets/images/icon-removebg-preview.png';
?>
<div class="py-[60px] lg:py-[80px]">
    <div class="container mb-[50px] lg:mb-[100px] flex justify-between items-center">
        <h2 class="text-[28px] lg:text-[40px] font-bold">
            <?php echo esc_html($title); ?>
        </h2>
        <div>
            <?php
            render_rocket_block('view-map', [
                'attributes' => [
                    'apiKey'=>'AIzaSyCEwPmqmSUiGv5_2fggY6Puo322J9_09mw',
                    'image_url' => $image_url
                ]
            ]);
            ?>
        </div>
    </div>

    <div class="container">
        <?php
        $data = [
            [
                'country' => 'Australia',
                'locations' => [
                    [
                        'title' => 'Datum Consulting AU PTY',
                        'address' => '8 Beulah Road, Norwood, Adelaide'
                    ]
                ],
                'open' => true,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
                'phone' => '',
                'email' => '',
            ],
            [
                'country' => 'New Zealand',
                'locations' => [
                    [
                        'title' => 'Datum Limited',
                        'address' => '70 Symonds Street Auckland'
                    ]
                ],
                'open' => false,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
                'phone' => '',
                'email' => '',
            ],
            [
                'country' => 'Philippines',
                'locations' => [
                    [
                        'title' => 'Datum Consulting Philippines, Inc.',
                        'address' => '8 Rockwell Dr, Makati, Metro Manila'
                    ]
                ],
                'open' => false,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
                'phone' => '',
                'email' => '',
            ],
            [
                'country' => 'Vietnam',
                'locations' => [
                    [
                        'title' => 'Datum Consulting VN Company LTD',
                        'address' => '52B2, Sala Residential Area, District 2. HCMC'
                    ]
                ],
                'open' => false,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
                'phone' => '02822150050',
                'email' => 'contacts@datumhq.com',
            ],
            [
                'country' => 'Thailand',
                'locations' => [
                    [
                        'title' => 'Coming Soon',
                        'address' => ''
                    ]
                ],
                'open' => false,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
            ],
        ];

        foreach ($data as $item) {
            render_rocket_block('locations', $item);
        }
        ?>
    </div>
</div>