<?php /* Template Name: About Datum Template */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.About_us.title',
    'background_image' => get_assets_from_path('images/datum-about-slide.jpg')
)); ?>

<!-- second section -->
<div class=" ">
    <div class="container">
        <div class="flex pt-[60px] lg:pt-[93px] lg:w-[723px]">
            <div class="text-[24px] lg:text-[36px] font-normal lg:leading-[170%] text-black">
                <div>
                    <?php echo datum_translate('About.intro.headline') ?>
                </div>
            </div>
        </div>

        <div class="flex pt-6 lg:pt-[70px] lg:w-[785px]">
            <div class="text-[16px] lg:text-[20px] font-normal leading-[170%] text-black tracking-[-0.2px]">
                <div>
                    <p class="mb-8">
                        <?php echo datum_translate('About.intro.paragraphs.0') ?>
                    </p>
                    <p>
                        <?php echo datum_translate('About.intro.paragraphs.1') ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
     
</div>


    <?php
    get_template_part('template-parts/content/info-section-list-about', null, array(
        'title' => datum_translate('About.what_we_do.title'),
        'items' => array(
            array(
                'title' => datum_translate('About.what_we_do.items.0.title'),
                'content' => datum_translate('About.what_we_do.items.0.content'),
            ),
            array(
                'title' => datum_translate('About.what_we_do.items.1.title'),
                'content' => datum_translate('About.what_we_do.items.1.content'),
            ),
            array(
                'title' => datum_translate('About.what_we_do.items.2.title'),
                'content' => datum_translate('About.what_we_do.items.2.content'),
            ),
        ),
    )) ;
    ?>
    <div class=" mt-[-100px] pb-[146px]" ></div>

<!-- We dont just -->
<?php
get_template_part('template-parts/content/about-we-dont-just', null, array(
    'title' => datum_translate('About.we_dont_just.title'),
    'image_url' => get_assets_from_path('images/Group 34.jpg'),
    'items' => array(
        array(
            'title' => datum_translate('About.we_dont_just.items.0.title'),
            'content' => datum_translate('About.we_dont_just.items.0.content'),
        ),
        array(
            'title' => datum_translate('About.we_dont_just.items.1.title'),
            'content' => datum_translate('About.we_dont_just.items.1.content'),
        ),
        array(
            'title' => datum_translate('About.we_dont_just.items.2.title'),
            'content' => datum_translate('About.we_dont_just.items.2.content'),
        ),
        array(
            'title' => datum_translate('About.we_dont_just.items.3.title'),
            'content' => datum_translate('About.we_dont_just.items.3.content'),
        ),
    )
)) ;
?>


<?php
get_template_part('template-parts/content/our-values', null, array(
    'title' => datum_translate('About.our_values.title'),
    'image_url' => get_assets_from_path('images/our_values.jpg'),
    'items' => array(
        array(
            'title' => datum_translate('About.our_values.items.0.title'),
            'content' => datum_translate('About.our_values.items.0.content_text'),
        ),
        array(
            'title' => datum_translate('About.our_values.items.1.title'),
            'content' => datum_translate('About.our_values.items.1.content_text'),
        ),
        array(
            'title' => datum_translate('About.our_values.items.2.title'),
            'content' => datum_translate('About.our_values.items.2.content_text'),
        ),
        array(
            'title' => datum_translate('About.our_values.items.3.title'),
            'content' => datum_translate('About.our_values.items.3.content_text'),
        ),
       
    )
)) ;
?>


<!-- Our Teams -->
<?php
get_template_part('template-parts/content/our-teams', null, array(
    'title' => datum_translate('About.our_team.title'),
    'members' => array(
        array(
            'name' => datum_translate('About.our_team.members.0.name'),
            'title' => datum_translate('About.our_team.members.0.title'),
            'image_url' => get_assets_from_path('images/our_team_1.jpg'),
        ),
        array(
            'name' => datum_translate('About.our_team.members.1.name'),
            'title' => datum_translate('About.our_team.members.1.title'),
            'image_url' => get_assets_from_path('images/our_team_2.jpg'),
        ),
        array(
            'name' => datum_translate('About.our_team.members.2.name'),
            'title' => datum_translate('About.our_team.members.2.title'),
            'image_url' => get_assets_from_path('images/our_team_3.jpg'),
        )
    ),
    'summembers' => array(
        array(
            'number' => datum_translate('About.our_team.summembers.0.number'),
            'description' => datum_translate('About.our_team.summembers.0.description'),
        ),
        array(
            'number' => datum_translate('About.our_team.summembers.1.number'),
            'description' => datum_translate('About.our_team.summembers.1.description'),
        )
    )
)) ;
?>



<!-- Our Partners -->
<?php get_template_part('template-parts/content/partners-about-datum'); ?>

<!-- Location -->
<?php get_template_part('template-parts/content/location'); ?>

<?php get_template_part('template-parts/content/back-to-top'); ?>

<?php get_footer(); ?>