<?php /* Template Name: Service: Cloud Template */ ?>
<?php get_header(); ?>

<?php
get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.cloud.title',
    'breadcrumbs' => array('breadcrumbs.services', 'breadcrumbs.cloud'),
    'background_image' => get_assets_from_path('videos/cloud_banner_video.mp4'),
    'type' => 'video'
));
?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'hero.cloud',
    'image_url' => get_assets_from_path('images/cta_bg_1.png'),
    'cta_text' => 'cta.schedule',
    'cta_link' => '#'
));
?>

<?php
get_template_part('template-parts/content/percentage-column-info', null, array(
    'title' => 'cloud_now.title',
    'items' => array(
        array(
            'percent' => '30%',
            'content' => 'cloud_now.items.0.content'
        ),
        array(
            'percent' => '20%',
            'content' => 'cloud_now.items.1.content'
        ),
    )
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-cloud', null, array(
    'title' => 'cloud_intro.title',
    'image_url' => get_assets_from_path('images/mainframe.png'),
    'items' => array(
        array(
            'title' => '',
            'content' => 'cloud_intro.items.0.content',
        )
    ),
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => datum_translate('cloud_why.title'),
    'image_url' => get_assets_from_path('images/green-rack.png'),
    'items' => array(
        array(
            'title' => datum_translate('cloud_why.items.0.title'),
            'content' => datum_translate('cloud_why.items.0.content'),
        ),
        array(
            'title' => datum_translate('cloud_why.items.1.title'),
            'content' => datum_translate('cloud_why.items.1.content'),
        ),
        array(
            'title' => datum_translate('cloud_why.items.2.title'),
            'content' => datum_translate('cloud_why.items.2.content'),
        )
    ),
)) ;
?>


<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'clound_section.title',
    'items' => array(
        array(
            'title' => 'clound_section.items.0.title',
            'content' => 'clound_section.items.0.content',
        ),
        array(
            'title' => 'clound_section.items.1.title',
            'content' => 'clound_section.items.1.content',
        ),
        array(
            'title' => 'clound_section.items.2.title',
            'content' => 'clound_section.items.2.content',
        ),
        array(
            'title' => 'clound_section.items.3.title',
            'content' => 'clound_section.items.3.content',
        ),
        array(
            'title' => 'clound_section.items.4.title',
            'content' => 'clound_section.items.4.content',
        ),
        array(
            'title' => 'clound_section.items.5.title',
            'content' => 'clound_section.items.5.content',
        ),
        array(
            'title' => 'clound_section.items.6.title',
            'content' => 'clound_section.items.6.content',
        ),
    ),
)) ;
?>

<?php get_template_part('template-parts/content/partners-about-datum'); ?>

<?php get_template_part('template-parts/content/successful-stories-banking', null, array(
    'title' => 'banking_stories.title',
    'title_1' => 'banking_stories.story_1',
    'title_2' => 'banking_stories.story_2',
)); ?>

<?php get_template_part('template-parts/content/frequently-asked-questions', null, array(
    'items' => array(
    array(
        'title' => datum_translate('faq.cloud.items.0.title'),
        'content' => datum_translate('faq.cloud.items.0.content'),
    ),
    array(
        'title' => datum_translate('faq.cloud.items.1.title'),
        'content' => datum_translate('faq.cloud.items.1.content'),
    ),
    array(
        'title' => datum_translate('faq.cloud.items.2.title'),
        'content' => datum_translate('faq.cloud.items.2.content'),
    ),
    array(
        'title' => datum_translate('faq.cloud.items.3.title'),
        'content' => datum_translate('faq.cloud.items.3.content'),
    ),
    array(
        'title' => datum_translate('faq.cloud.items.4.title'),
        'content' => datum_translate('faq.cloud.items.4.content'),
    ),
    array(
        'title' => datum_translate('faq.cloud.items.5.title'),
        'content' => datum_translate('faq.cloud.items.5.content'),
    ),
    array(
        'title' => datum_translate('faq.cloud.items.6.title'),
        'content' => datum_translate('faq.cloud.items.6.content'),
    ),
    ),
    'text_title'=>datum_translate('faq.cloud.btn_text')
)); ?>

<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.title_cloud',
    'content' => 'team_section.content',
    'btn_text' => 'cta.schedule',
    'btn_link' => '#'
)); ?>

<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>
