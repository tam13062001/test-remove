<?php /* Template Name: Solution: Platform Engineering Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.Platform.title',
    'breadcrumbs' => array('breadcrumbs.solution', 'breadcrumbs.platform'),
    'background_image' => get_assets_from_path('images/spe_banne.png'),
    'type' => 'image'
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'hero.platform',
    'image_url' => get_assets_from_path('images/cta_bg_4.png'),
    'cta_text' => 'cta.schedule',
    'cta_link' => '#'
));
?>

<?php get_template_part('template-parts/content/slide-building', null, array(
    'title' => datum_translate('building.platform.title'),
    'data' => array(
        array(
            'title' => datum_translate('building.platform.items.0.title'),
            'image_url' => get_assets_from_path('images/slide-digital3.jpg')
        ),
        array(
            'title' => datum_translate('building.platform.items.1.title'),
            'image_url' => get_assets_from_path('images/slide-image-4.jpeg')
        ),
        array(
            'title' => datum_translate('building.platform.items.2.title'),
            'image_url' => get_assets_from_path('images/slide-image-5.jpeg')
        )
    )
)); ?>

<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'platform.title',
    'items' => array(
        array(
            'title' => 'platform.items.0.title',
            'content' => 'platform.items.0.content',
        ),
        array(
            'title' => 'platform.items.1.title',
            'content' => 'platform.items.1.content',
        ),
        array(
            'title' => 'platform.items.2.title',
            'content' => 'platform.items.2.content',
        ),
        array(
            'title' => 'platform.items.3.title',
            'content' => 'platform.items.3.content',
        ),
        array(
            'title' => 'platform.items.4.title',
            'content' => 'platform.items.4.content',
        ),
        array(
            'title' => 'platform.items.5.title',
            'content' => 'platform.items.5.content',
        ),
        array(
            'title' => 'platform.items.6.title',
            'content' => 'platform.items.6.content',
        ),
        array(
            'title' => 'platform.items.7.title',
            'content' => 'platform.items.7.content',
        ),
        array(
            'title' => 'platform.items.8.title',
            'content' => 'platform.items.8.content',
        ),
        array(
            'title' => 'platform.items.9.title',
            'content' => 'platform.items.9.content',
        ),
        array(
            'title' => 'platform.items.10.title',
            'content' => 'platform.items.10.content',
        ),
        array(
            'title' => 'platform.items.11.title',
            'content' => 'platform.items.11.content',
        ),
    ),
));
?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'why_datum_solution.title',
    'image_url' => get_assets_from_path('images/WhyDatum-Solution.png'),
    'items' => array(
        array(
            'title' => 'why_datum_solution.items.0.title',
            'content' => 'why_datum_solution.items.0.content',
        ),
        array(
            'title' => 'why_datum_solution.items.1.title',
            'content' => 'why_datum_solution.items.1.content',
        ),
        array(
            'title' => 'why_datum_solution.items.2.title',
            'content' => 'why_datum_solution.items.2.content',
        )
    ),
));
?>

<?php get_template_part('template-parts/content/successful-stories-banking', null, array(
    'title' => 'banking_stories.title',
    'title_1' => 'banking_stories.story_1',
    'title_2' => 'banking_stories.story_2',
)); ?>
<?php
get_template_part('template-parts/content/frequently-asked-questions', null, array(

    'items' => array(
        array(
        'title' => datum_translate('faq.platform.items.0.title'),
        'content' => datum_translate('faq.platform.items.0.content'),
        ),
        array(
        'title' => datum_translate('faq.platform.items.1.title'),
        'content' => datum_translate('faq.platform.items.1.content'),
        ),
        array(
        'title' => datum_translate('faq.platform.items.2.title'),
        'content' => datum_translate('faq.platform.items.2.content'),
        ),
        array(
        'title' => datum_translate('faq.platform.items.3.title'),
        'content' => datum_translate('faq.platform.items.3.content'),
        ),
        array(
        'title' => datum_translate('faq.platform.items.4.title'),
        'content' => datum_translate('faq.platform.items.4.content'),
        ),
        array(
        'title' => datum_translate('faq.platform.items.5.title'),
        'content' => datum_translate('faq.platform.items.5.content'),
        ),
    ),
    'text_title'=>datum_translate('faq.platform.btn_text'),
));
?>
<?php get_template_part('template-parts/content/Expert-insight'); ?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.title_story',
    'content' => 'team_section.content_solution_platform',
    'btn_text' => 'team_section.get_consulted_solution',
    'btn_link' => '#'
)); ?>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>
