<?php
$job_data = [
    'job' => [
        [
            'groupName' => 'All',
            'jobs' => [
                [
                    'title' => 'Multimedia  Designer Designer DesignerDesigner',
                    'category' => 'Marketing',
                    'location' => 'Vietnam',
                    'type' => 'Full-time',
                ],
                [
                    'title' => 'Data Engineer',
                    'category' => 'Marketing',
                    'location' => 'Thailand',
                    'type' => 'Full-time',
                ],
                [
                    'title' => 'Software Engineer',
                    'category' => 'Software',
                    'location' => 'Vietnam',
                    'type' => 'Full-time',
                ],
                [
                    'title' => 'Software Engineer',
                    'category' => 'Software',
                    'location' => 'New Zealand',
                    'type' => 'Full-time',
                ],
                [
                    'title' => 'Software Qualify',
                    'category' => 'Australia',
                    'location' => 'New Zealand',
                    'type' => 'Part-time',
                ],
                [
                    'title' => 'Marketing Executive',
                    'category' => 'Marketing',
                    'location' => 'New Zealand',
                    'type' => 'Full-time',
                ],
            ]
        ],
        [
            'groupName' => 'Vietnam',
            'jobs' => [
                [
                    'title' => 'Multimedia Designer',
                    'category' => 'Marketing',
                    'location' => 'Vietnam',
                    'type' => 'Full-time',
                ],
                [
                    'title' => 'Software Engineer',
                    'category' => 'Software',
                    'location' => 'Vietnam',
                    'type' => 'Full-time',
                ],
            ]
        ],
        [
            'groupName' => 'Australia',
            'jobs' => [
                [
                    'title' => 'Software Qualify',
                    'category' => 'Australia',
                    'location' => 'New Zealand',
                    'type' => 'Part-time',
                ]
            ]
        ],
        [
            'groupName' => 'New Zealand',
            'jobs' => [
                [
                    'title' => 'Software Engineer',
                    'category' => 'Software',
                    'location' => 'New Zealand',
                    'type' => 'Full-time',
                ],
                [
                    'title' => 'Software Qualify',
                    'category' => 'Australia',
                    'location' => 'New Zealand',
                    'type' => 'Part-time',
                ],
                [
                    'title' => 'Marketing Executive',
                    'category' => 'Marketing',
                    'location' => 'New Zealand',
                    'type' => 'Full-time',
                ],
            ]
        ],
        [
            'groupName' => 'Phillipines',
            'jobs' => [
                // chưa có vị trí
            ]
        ],
        [
            'groupName' => 'Thailand',
            'jobs' => [
                [
                    'title' => 'Data Engineer',
                    'category' => 'Marketing',
                    'location' => 'Thailand',
                    'type' => 'Full-time',
                ]
            ]
        ],
    ],
    'defaultActiveKey' => 'All',
    'emptyMessage' => 'No positions available'
];


?>

<div class=" py-[50px] relative min-h-[600px] overflow-hidden">
    <div class="hidden lg:block lg:absolute -top-[330px] right-0 w-[500px] h-[350px] translate-x-1/3 z-[-1]">
        <img class="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/Group 62.png' ?>" />
    </div>
    <div class=" z-10"><?php render_rocket_block('job', $job_data); ?></div>
</div>