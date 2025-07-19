<?php /* Template Name: Service: Data & AI Template */ ?>
<?php get_header(); ?>

<?php
get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.data_ai.title',
    'breadcrumbs' => array('breadcrumbs.services', 'breadcrumbs.data_ai'),
    'background_image' => get_assets_from_path('videos/homepage_data_ai.mp4'),
    'type' => 'video'
));
?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'hero.data',
    'image_url' => get_assets_from_path('images/Layer_1.png'),
    'cta_text' => 'cta.schedule',
    'cta_link' => '#'
));
?>

<?php
get_template_part('template-parts/content/percentage-column-info', null, array(
    'title' => 'data_ai_percentage.title',
    'items' => array(
        array(
            'percent' => '30%',
            'content' => 'data_ai_percentage.items.0.content',
        ),
        array(
            'percent' => '20%',
            'content' => 'data_ai_percentage.items.1.content',
        ),
    )
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-data_ai', null, array(
    'title' => 'data_ai_section.title',
    'image_url' => get_assets_from_path('images/mainframe2.png'),
    'items' => array(
        array(
            'title' => '',
            'content' => 'data_ai_section.items.0.content',
        )
    ),
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'why_datum_ai.title',
    'image_url' => get_assets_from_path('images/sv-ai-whydatum.png'),
    'items' => array(
        array(
            'title' => 'why_datum_ai.items.0.title',
            'content' => 'why_datum_ai.items.0.content',
        ),
        array(
            'title' => 'why_datum_ai.items.1.title',
            'content' => 'why_datum_ai.items.1.content',
        ),
        array(
            'title' => 'why_datum_ai.items.2.title',
            'content' => 'why_datum_ai.items.2.content',
        )
    ),
));
?>



<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'data_ai.title',
    'items' => array(
        array(
            'title' => 'data_ai.items.0.title',
            'content' => 'data_ai.items.0.content',
        ),
        array(
            'title' => 'data_ai.items.1.title',
            'content' => 'data_ai.items.1.content',
        ),
        array(
            'title' => 'data_ai.items.2.title',
            'content' => 'data_ai.items.2.content',
        ),
        array(
            'title' => 'data_ai.items.3.title',
            'content' => 'data_ai.items.3.content',
        ),
        array(
            'title' => 'data_ai.items.4.title',
            'content' => 'data_ai.items.4.content',
        ),
    ),
));
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
        'title' => datum_translate('faq.data_ai.items.0.title'),
        'content' => datum_translate('faq.data_ai.items.0.content'),
    ),
    array(
        'title' => datum_translate('faq.data_ai.items.1.title'),
        'content' => datum_translate('faq.data_ai.items.1.content'),
    ),
    array(
        'title' => datum_translate('faq.data_ai.items.2.title'),
        'content' => datum_translate('faq.data_ai.items.2.content'),
    ),
    array(
        'title' => datum_translate('faq.data_ai.items.3.title'),
        'content' => datum_translate('faq.data_ai.items.3.content'),
    ),
    array(
        'title' => datum_translate('faq.data_ai.items.4.title'),
        'content' => datum_translate('faq.data_ai.items.4.content'),
    ),
    array(
        'title' => datum_translate('faq.data_ai.items.5.title'),
        'content' => datum_translate('faq.data_ai.items.5.content'),
    ),
    ),
    'text_title'=>datum_translate('faq.data_ai.btn_text')
)); ?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.title_data_ai',
    'content' => 'team_section.content',
    'btn_text' => 'team_section.get_consulted_service',
    'btn_link' => '#'
)); ?>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>