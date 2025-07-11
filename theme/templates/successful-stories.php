<?php /* Template Name: Successful Story Template */ ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.PremierBanking.title',
    'background_image' => get_assets_from_path('images/banner_solution_3.jpg'),
    'breadcrumbs' => array('breadcrumbs.successful_stories', 'breadcrumbs.premier_banking'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-story', null, array(
    'title' =>  datum_translate('call_to_action_story.PremierBanking.title'),
    'content' => datum_translate('call_to_action_story.PremierBanking.content'),
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'cta_text' => datum_translate('call_to_action_story.PremierBanking.cta_text'),
    'cta_link' => '#'
));
?>

<?php
get_template_part('template-parts/content/info-section-with-image-reverse', null, array(
    'title'     => datum_translate('story.PremierBanking.tech_meets_banking.title'),
    'heading'   => datum_translate('story.PremierBanking.tech_meets_banking.heading'),
    'image_url' => get_assets_from_path('images/story_tech_meet_banking.png'),
    'items'     => array(
        array(
            'content' => datum_translate('story.PremierBanking.tech_meets_banking.items.0'),
        ),
        array(
            'content' => datum_translate('story.PremierBanking.tech_meets_banking.items.1'),
        ),
        array(
            'content' => datum_translate('story.PremierBanking.tech_meets_banking.items.2'),
        ),
    ),
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-story-percent', null, array(
    'title'           => datum_translate('story.PremierBanking.valuable_difference.title'),
    'content'         => datum_translate('story.PremierBanking.valuable_difference.content'),
    'image_url'       => get_assets_from_path('images/success_story_meaningfull.jpg'),
    'percent'         => datum_translate('story.PremierBanking.valuable_difference.percent'),
    'percent_content' => datum_translate('story.PremierBanking.valuable_difference.percent_content')
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-reverse-lesson', null, array(
    'title'    => datum_translate('story.PremierBanking.lessons_learned.title'),
    'heading'  => datum_translate('story.PremierBanking.lessons_learned.heading'),
    'image_url'=> get_assets_from_path('images/success_story_lesson.png'),
    'content'  => datum_translate('story.PremierBanking.lessons_learned.content')
));
?>

<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.get_consulted',
    'content' => 'team_section.content_1',
    'btn_text' => 'cta.schedule',
    'btn_link' => '#'
)); ?>

<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>