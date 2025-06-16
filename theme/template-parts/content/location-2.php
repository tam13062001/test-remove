<?php
$title = $args['title'] ?? 'Locations';
?>
<div class="py-[60px] lg:py-[80px]">
    <div class="container mb-[50px] lg:mb-[100px]">
        <h2 class="text-[32px] lg:text-[40px] font-bold">
            <?php echo esc_html($title); ?>
        </h2>
    </div>

    <div class="container">
        <?php
        $data = [
            [
                'country' => 'Australia',
                'locations' => [
                    [
                        'title' => 'Datum Consulting AU PTY',
                        'address' => 'Level 1, 8 Beulah Road, Norwood SA 5067<br>Adelaide, Australia'
                    ]
                ],
                'open' => true,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
                'phone' => '61-3-1234 5678',
                'email' => 'aus@datumhq.com',
                'map_url' => 'https://www.google.com/maps'
            ],
            [
                'country' => 'New Zealand',
                'locations' => [
                    [
                        'title' => 'Datum Limited',
                        'address' => '70 Symonds Street, 1010 Auckland, New Zealand'
                    ]
                ],
                'open' => false,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
                'phone' => '61-3-1234 5678',
                'email' => 'aus@datumhq.com',
                'map_url' => 'https://www.google.com/maps'
            ],
            [
                'country' => 'Philippines',
                'locations' => [
                    [
                        'title' => 'Datum Consulting Philippines, Inc.',
                        'address' => '7th Floor, Unit B, Center, 8 Rockwell Dr, Makati, 1209 Metro Manila, Philippines'
                    ]
                ],
                'open' => false,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
                'phone' => '61-3-1234 5678',
                'email' => 'aus@datumhq.com',
                'map_url' => 'https://www.google.com/maps'
            ],
            [
                'country' => 'Vietnam',
                'locations' => [
                    [
                        'title' => 'Datum Consulting VN Company LTD',
                        'address' => '52-54-56 E. B2, Sala Residential Area, District 2 (now Thu Duc), Ho Chi Minh City 700000, Vietnam'
                    ]
                ],
                'open' => false,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
                'phone' => '61-3-1234 5678',
                'email' => 'aus@datumhq.com',
                'map_url' => 'https://www.google.com/maps'
            ],
            [
                'country' => 'Thailand',
                'locations' => [
                    [
                        'title' => 'Datum Consulting VN Company LTD',
                        'address' => '52-54-56 E. B2, Sala Residential Area, District 2 (now Thu Duc), Ho Chi Minh City 700000, Vietnam'
                    ]
                ],
                'open' => false,
                'image_url' => get_stylesheet_directory_uri() . '/assets/images/Location-2.jpg',
                'phone' => '61-3-1234 5678',
                'email' => 'aus@datumhq.com',
                'map_url' => 'https://www.google.com/maps'
            ],
        ];

        foreach ($data as $item) {
            render_rocket_block('locations', $item);
        }
        ?>
    </div>
</div>
