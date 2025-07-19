<?php /* Template Name: Solution: Digital Transformation Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'background_image' => get_assets_from_path('images/banner_solution_2.jpg'),
    'title' => 'banner.Digital.title',
    'breadcrumbs' => array('breadcrumbs.solution', 'breadcrumbs.digital'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' =>  'hero.digital',
    'image_url' => get_assets_from_path('images/solution-digital.png'),
    'cta_text' => 'cta.schedule',
    'cta_link' => '#'
));
?>

<?php get_template_part('template-parts/content/slide-building', null, array(
    'title' => datum_translate('building.digital.title'),
    'data' => array(
        array(
            'title' => datum_translate('building.digital.items.0.title'),
            'image_url' => get_assets_from_path('images/slide-digital1.jpg')
        ),
        array(
            'title' => datum_translate('building.digital.items.1.title'),
            'image_url' => get_assets_from_path('images/slide-image-2.jpeg')
        ),
        array(
            'title' => datum_translate('building.digital.items.2.title'),
            'image_url' => get_assets_from_path('images/slide-digital3.jpg')
        )
    )
)); ?>

<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'digital.title',
    'items' => array(
        array(
            'title' => 'digital.items.0.title',
            'content' => 'digital.items.0.content',
        ),
        array(
            'title' => 'digital.items.1.title',
            'content' => 'digital.items.1.content',
        ),
        array(
            'title' => 'digital.items.2.title',
            'content' => 'digital.items.2.content',
        ),
        array(
            'title' => 'digital.items.3.title',
            'content' => 'digital.items.3.content',
        ),
        array(
            'title' => 'digital.items.4.title',
            'content' => 'digital.items.4.content',
        ),
        array(
            'title' => 'digital.items.5.title',
            'content' => 'digital.items.5.content',
        ),
        array(
            'title' => 'digital.items.6.title',
            'content' => 'digital.items.6.content',
        ),
        array(
            'title' => 'digital.items.7.title',
            'content' => 'digital.items.7.content',
        ),
        array(
            'title' => 'digital.items.8.title',
            'content' => 'digital.items.8.content',
        ),
    ),
)) ;
?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => datum_get_translation('digital_whydatum.title'),
    'image_url' => get_assets_from_path('images/digital-whydatum.png'),
    'items' => array(
        array(
            'title' => datum_get_translation('digital_whydatum.items.0.title'),
            'content' => datum_get_translation('digital_whydatum.items.0.content'),
        ),
        array(
            'title' => datum_get_translation('digital_whydatum.items.1.title'),
            'content' => datum_get_translation('digital_whydatum.items.1.content'),
        ),
        array(
            'title' => datum_get_translation('digital_whydatum.items.2.title'),
            'content' => datum_get_translation('digital_whydatum.items.2.content'),
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
        'title' => datum_translate('faq.digital.items.0.title'),
        'content' => datum_translate('faq.digital.items.0.content'),
        ),
        array(
        'title' => datum_translate('faq.digital.items.1.title'),
        'content' => datum_translate('faq.digital.items.1.content'),
        ),
        array(
        'title' => datum_translate('faq.digital.items.2.title'),
        'content' => datum_translate('faq.digital.items.2.content'),
        ),
        array(
        'title' => datum_translate('faq.digital.items.3.title'),
        'content' => datum_translate('faq.digital.items.3.content'),
        ),
        array(
        'title' => datum_translate('faq.digital.items.4.title'),
        'content' => datum_translate('faq.digital.items.4.content'),
        ),
        array(
        'title' => datum_translate('faq.digital.items.5.title'),
        'content' => datum_translate('faq.digital.items.5.content'),
        ),
    ),
    'text_title'=>datum_translate('faq.digital.btn_text'),
));
?>
<?php get_template_part('template-parts/content/Expert-insight'); ?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.title_story',
    'content' => 'team_section.content_solution_digital',
    'btn_text' => 'team_section.get_consulted_solution',
    'btn_link' => '#'
)); ?>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>
