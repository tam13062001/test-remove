<?php /* Template Name: Our Team Template */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Our Team',
    'background_image' => get_assets_from_path('images/datum-our-team.jpg')
)); ?>

<!-- second section -->
<div class=" ">
    <div class="container">
        <div class="flex pt-[60px] lg:pt-[93px] lg:w-[823px]">
            <div class="text-[24px] lg:text-[36px] font-normal lg:leading-[170%] text-black">
                <div>
                    Our team of consultants tackles business challenges and delivers innovative solutions.
                </div>
            </div>
        </div>
    </div>
</div>

<div class=" mt-[-100px] pb-[146px]" ></div>



<?php get_template_part('template-parts/content/member-table'); ?>

<!-- Our Teams -->
<?php
get_template_part('template-parts/content/our-teams', null, array(
    'title' => 'Our Team',
    'members' => array(
        array(
            'name' => 'Nghia Nguyen',
            'title' => 'Co-founder',
            'image_url' => get_assets_from_path('images/our_team_1.jpg'),
        ),
        array(
            'name' => 'Nick Do',
            'title' => 'Co-founder',
            'image_url' => get_assets_from_path('images/our_team_2.jpg'),
        ),
        array(
            'name' => 'Thang Nguyen',
            'title' => 'CIO – Chief of Information Officer',
            'image_url' => get_assets_from_path('images/our_team_3.jpg'),
        )
    ),
    'summembers' => array(
        array(
            'number' => '20+',
            'description' => 'Solution Architects & Technical Leads',
        ),
        array(
            'number' => '100+',
            'description' => 'Cloud, AI, DevOps, and Software<br />Engineering Specialists',
        )
    )
)) ;
?>



<!-- Location -->
<?php get_template_part('template-parts/content/location'); ?>

<?php get_template_part('template-parts/content/back-to-top'); ?>

<?php get_footer(); ?>