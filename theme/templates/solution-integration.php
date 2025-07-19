<?php /* Template Name: Solution: Integration Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.Integration.title',
    'background_image' => get_assets_from_path('images/banner_solution_3.jpg'),
    'breadcrumbs' => array('breadcrumbs.solution', 'breadcrumbs.integration'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'hero.integration',
    'image_url' => get_assets_from_path('images/cta_bg_2.png'),
    'cta_text' => 'cta.schedule',
    'cta_link' => '#'
));
?>

<?php get_template_part('template-parts/content/slide-building', null, array(
    'title' => datum_translate('building.integration.title'),
    'data' => array(
        array(
            'title' => datum_translate('building.integration.items.0.title'),
            'image_url' => get_assets_from_path('images/slide-digital3.jpg')
        ),
        array(
            'title' => datum_translate('building.integration.items.1.title'),
            'image_url' => get_assets_from_path('images/slide-image-4.jpeg')
        ),
        array(
            'title' => datum_translate('building.integration.items.2.title'),
            'image_url' => get_assets_from_path('images/slide-image-5.jpeg')
        )
    )
)); ?>

<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'integration.title',
    'items' => array(
        array(
            'title' => 'integration.items.0.title',
            'content' => 'integration.items.0.content',
        ),
        array(
            'title' => 'integration.items.1.title',
            'content' => 'integration.items.1.content',
        ),
        array(
            'title' => 'integration.items.2.title',
            'content' => 'integration.items.2.content',
        ),
        array(
            'title' => 'integration.items.3.title',
            'content' => 'integration.items.3.content',
        ),
        array(
            'title' => 'integration.items.4.title',
            'content' => 'integration.items.4.content',
        ),
        array(
            'title' => 'integration.items.5.title',
            'content' => 'integration.items.5.content',
        ),
        array(
            'title' => 'integration.items.6.title',
            'content' => 'integration.items.6.content',
        ),
        array(
            'title' => 'integration.items.7.title',
            'content' => 'integration.items.7.content',
        ),
        array(
            'title' => 'integration.items.8.title',
            'content' => 'integration.items.8.content',
        ),
        array(
            'title' => 'integration.items.9.title',
            'content' => 'integration.items.9.content',
        ),
        array(
            'title' => 'integration.items.10.title',
            'content' => 'integration.items.10.content',
        ),
        array(
            'title' => 'integration.items.11.title',
            'content' => 'integration.items.11.content',
        ),
    ),
));
?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'integration_whydatum.title',
    'image_url' => get_assets_from_path('images/integration-whydatum.jpg'),
    'items' => array(
        array(
            'title' => 'integration_whydatum.items.0.title',
            'content' => 'integration_whydatum.items.0.content',
        ),
        array(
            'title' => 'integration_whydatum.items.1.title',
            'content' => 'integration_whydatum.items.1.content',
        ),
        array(
            'title' => 'integration_whydatum.items.2.title',
            'content' => 'integration_whydatum.items.2.content',
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
        'title' => datum_translate('faq.integration.items.0.title'),
        'content' => datum_translate('faq.integration.items.0.content'),
        ),
        array(
        'title' => datum_translate('faq.integration.items.1.title'),
        'content' => datum_translate('faq.integration.items.1.content'),
        ),
        array(
        'title' => datum_translate('faq.integration.items.2.title'),
        'content' => datum_translate('faq.integration.items.2.content'),
        ),
        array(
        'title' => datum_translate('faq.integration.items.3.title'),
        'content' => datum_translate('faq.integration.items.3.content'),
        ),
        array(
        'title' => datum_translate('faq.integration.items.4.title'),
        'content' => datum_translate('faq.integration.items.4.content'),
        ),
    ),
    'text_title'=>datum_translate('faq.integration.btn_text'),
));
?>
<?php get_template_part('template-parts/content/Expert-insight'); ?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.title_story',
    'content' => 'team_section.content_solution_integration',
    'btn_text' => 'team_section.get_consulted_solution',
    'btn_link' => '#'
)); ?>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>
