<?php /* Template Name: Service: Software Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.software.title',
    'breadcrumbs' => array('breadcrumbs.services', 'breadcrumbs.software'),
    'background_image' => get_assets_from_path('videos/software_banner_video.mp4'),
    'type' => 'video'
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'hero.software',
    'image_url' => get_assets_from_path('images/sv-s-bg.png'),
    'cta_text' => 'cta.schedule',
    'cta_link' => '#'
));
?>

<?php
get_template_part('template-parts/content/percentage-column-info', null, array(
    'title' => 'software_percentage.title',
    'items' => array(
        array(
            'percent' => '40%',
            'content' => 'software_percentage.items.0.content'
        ),
        array(
            'percent' => '25%',
            'content' => 'software_percentage.items.1.content'
        ),
    )
));
?>

<?php
get_template_part('template-parts/content/info-section-with-image-cloud', null, array(
    'title' => 'software_section.title',
    'image_url' => get_assets_from_path('images/img_7.png'),
    'items' => array(
        array(
            'title' => '',
            'content' => 'software_section.items.0.content',
        )
    ),
)) ; ?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'why_datum_software.title',
    'image_url' => get_assets_from_path('images/sv-ai-whydatum.png'),
    'items' => array(
        array(
            'title' => 'why_datum_software.items.0.title',
            'content' => 'why_datum_software.items.0.content',
        ),
        array(
            'title' => 'why_datum_software.items.1.title',
            'content' => 'why_datum_software.items.1.content',
        ),
        array(
            'title' => 'why_datum_software.items.2.title',
            'content' => 'why_datum_software.items.2.content',
        )
    ),
));
?>


<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'software.title',
    'items' => array(
        array(
            'title' => 'software.items.0.title',
            'content' => 'software.items.0.content',
        ),
        array(
            'title' => 'software.items.1.title',
            'content' => 'software.items.1.content',
        ),
        array(
            'title' => 'software.items.2.title',
            'content' => 'software.items.2.content',
        ),
        array(
            'title' => 'software.items.3.title',
            'content' => 'software.items.3.content',
        ),
        array(
            'title' => 'software.items.4.title',
            'content' => 'software.items.4.content',
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
        'title' => datum_translate('faq.software.items.0.title'),
        'content' => datum_translate('faq.software.items.0.content'),
        ),
        array(
        'title' => datum_translate('faq.software.items.1.title'),
        'content' => datum_translate('faq.software.items.1.content'),
        ),
        array(
        'title' => datum_translate('faq.software.items.2.title'),
        'content' => datum_translate('faq.software.items.2.content'),
        ),
        array(
        'title' => datum_translate('faq.software.items.3.title'),
        'content' => datum_translate('faq.software.items.3.content'),
        ),
        array(
        'title' => datum_translate('faq.software.items.4.title'),
        'content' => datum_translate('faq.software.items.4.content'),
        ),
        array(
        'title' => datum_translate('faq.software.items.5.title'),
        'content' => datum_translate('faq.software.items.5.content'),
        ),
        array(
        'title' => datum_translate('faq.software.items.6.title'),
        'content' => datum_translate('faq.software.items.6.content'),
        ),
    ),
    'text_title'=>datum_translate('faq.software.btn_text')
)); ?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.title_software',
    'content' => 'team_section.content_software',
    'btn_text' => 'cta.schedule',
    'btn_link' => '#'
)); ?>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>
