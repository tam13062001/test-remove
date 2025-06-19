<?php
$team_data = [
    'teams' => [
        [
            'groupName' => 'Founders',
            'members' => [
                [
                    'name' => 'Nghia Nguyen',
                    'role' => 'Co-founder',
                    'image_url' => get_assets_from_path('images/our_team_1.jpg'),
                ],
                [
                    'name' => 'Nick Do',
                    'role' => 'Co-founder',
                    'image_url' => get_assets_from_path('images/our_team_2.jpg'),
                ],
                [
                    'name' => 'Thang Nguyen',
                    'role' => 'CIO - Chief of Information Officer',
                    'image_url' => get_assets_from_path('images/our_team_3.jpg'),
                ],
            ]
        ],
        [
            'groupName' => 'Software Engineers',
            'members' => [
                [
                    'name' => 'Vuong Nguyen',
                    'role' => 'Department head',
                    'image_url' => get_assets_from_path('images/Software Engineers-1.jpg'),
                ],
                [
                    'name' => 'Nghia Nguyen',
                    'role' => 'Department head',
                    'image_url' => get_assets_from_path('images/Software Engineers-2.jpg'),
                ],
                [
                    'name' => 'Nghia Nguyen',
                    'role' => 'Department head',
                    'image_url' => get_assets_from_path('images/Software Engineers-3.jpg'),
                ],
                [
                    'name' => 'Quang Nguyen',
                    'role' => 'Department head',
                    'image_url' => get_assets_from_path('images/Software Engineers-4.jpg'),
                ],
                [
                    'name' => 'Vuong Nguyen',
                    'role' => 'Department head',
                    'image_url' => get_assets_from_path('images/Software Engineers-1.jpg'),
                ],
                [
                    'name' => 'Nghia Nguyen',
                    'role' => 'Department head',
                    'image_url' => get_assets_from_path('images/Software Engineers-2.jpg'),
                ],
            ]
        ],
        [
            'groupName' => 'Platform Engineers',
            'members' => [
                // Danh sách kỹ sư phần mềm
            ]
        ],
        [
            'groupName' => 'Data Engineers',
            'members' => [
                // Danh sách kỹ sư phần mềm
            ]
        ],
        [
            'groupName' => 'Software Quality',
            'members' => [
                // Danh sách kỹ sư phần mềm
            ]
        ],
        [
            'groupName' => 'Governance',
            'members' => [
                // Danh sách kỹ sư phần mềm
            ]
        ],
    ],
    'defaultActiveKey' => 'Founders',
    'emptyMessage' => 'No members in this group'
];

render_rocket_block('member', $team_data);
?>