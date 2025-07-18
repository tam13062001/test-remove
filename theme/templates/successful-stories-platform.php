<?php /* Template Name: Successful Story Platform Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.PlatformCustomization.title',
    'background_image' => get_assets_from_path('images/banner_solution_3.jpg'),
    'breadcrumbs' => array('breadcrumbs.successful_stories', 'breadcrumbs.platform_customization'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-story', null, array(
    'title' => datum_translate('call_to_action_story.PlatformCustomization.title'),
    'heading' => '',
    'content' => datum_translate('call_to_action_story.PlatformCustomization.content'),
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'cta_text' => datum_translate('call_to_action_story.PlatformCustomization.cta_text'),
    'cta_link' => '#'
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-reverse', null, array(
    'title' => datum_translate('story.Platform_Customization.challenge.title'),
    'heading' => '',
        'image_url' => get_assets_from_path('images/man-prevents-servers-overload 1.jpg'),
        'items' => array(
            array(
                'content' => datum_translate('story.Platform_Customization.technical_solutions.items.0'),
            ),
            array(
                'content' => datum_translate('story.Platform_Customization.technical_solutions.items.1'),
            ),
            array(
                'content' => datum_translate('story.Platform_Customization.technical_solutions.items.2'),
            ),
            array(
                'content' => datum_translate('story.Platform_Customization.technical_solutions.items.3'),
            )
        ),
    )) ;    
?>

<?php
get_template_part('template-parts/content/info-section-with-image-reverse-lesson-r', null, array(
    'title' => datum_translate('story.Platform_Customization.technical_solutions.title'),
    'heading' => '',   
    'image_url' => get_assets_from_path('images/image 20.jpg'),
    'items' => array(
        array(
           'content' => datum_translate('story.Platform_Customization.technical_solutions.items.0'),
        ),
        array(
           'content' => datum_translate('story.Platform_Customization.technical_solutions.items.1'),
        ),
        array(
           'content' => datum_translate('story.Platform_Customization.technical_solutions.items.2'),
        ),
    ),
    
)) ;
?>


<?php
get_template_part('template-parts/content/info-section-with-image-story-percent-l', null, array(
    'title' => datum_translate('story.Platform_Customization.impactful_outcome.title'),
    'heading' => '',   
    'items' => array(
        array(
           'content' => datum_translate('story.Platform_Customization.impactful_outcome.items.0'),
        ),
        array(
           'content' => datum_translate('story.Platform_Customization.impactful_outcome.items.1'),
        ),
        array(
           'content' => datum_translate('story.Platform_Customization.impactful_outcome.items.2'),
        ),
        array(
           'content' => datum_translate('story.Platform_Customization.impactful_outcome.items.3'),
        ),
    ),
    'image_url' => get_assets_from_path('images/man-prevents-servers-overload-2.jpg'),    
    'percent' => datum_translate('story.Platform_Customization.impactful_outcome.percent'),
    'percent_content' => datum_translate('story.Platform_Customization.impactful_outcome.percent_content'),      
)) ;
?>

<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'Get consulted by our expert',
    'content' => 'Talk with our expert to start building your platform',
    'btn_text' => 'Schedule a consultation with our expert',
    'btn_link' => '#'
)); ?>

<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>