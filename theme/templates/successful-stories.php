<?php /* Template Name: Successful Story Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Digital Transformation for a Premier Banking Client',
    'background_image' => get_assets_from_path('images/success_story_bank.png'),
    'breadcrumbs' => array('Successful stories', 'Premier Banking'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-story', null, array(
    'title' => 'Call for Change',
    'heading' => 'As part of its Better Banking Experience (BBX) initiative, a leading financial institution sought to modernize its digital banking services.',
    'content' => 'They aim to do this by refreshing channels, integrating third-party banking processors, and enhancing operational efficiency. However, security vulnerabilities, governance challenges, rising infrastructure costs, and manual inefficiencies posed significant obstacles to transformation, making it clear that a new approach was necessary.',
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'cta_text' => 'Download detail case study',
    'cta_link' => '#'
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-reverse', null, array(
    'title' => 'When Tech Meets Banking Excellence',
    'heading' => 'Datum Consulting helped the bank create a secure and efficient cloud system for easier digital banking.',   
    'image_url' => get_assets_from_path('images/story_tech_meet_banking.png'),
    'items' => array(
        array(
            'content' => 'Utilize AWS Landing Zone and an EKS-based workload platform',
        ),
        array(
            'content' => 'Establish a secure, scalable, and automated environment while ensuring compliance',
        ),
        array(
            'content' => 'Create a redefined API management strategy, robust networking framework, and automated deployment pipelines to improve operations and security',
        )
    ),
)) ;
?>

<?php
get_template_part('template-parts/content/info-section-with-image-story-percent', null, array(
    'title' => 'A Meaningful Impact',
    'content' => 'The transformation enhanced security and compliance, ensuring no breaches and adherence to banking standards. Operational efficiency improved with quicker provisioning and reduced manual tasks. Platform performance reached 99.9% uptime, allowing for seamless scalability. The migration of legacy systems and integration of new services bolstered the bank’s innovation strategy, with Datum Consulting as a key partner in its digital journey.',   
    'image_url' => get_assets_from_path('images/success_story_meaningfull.jpg'),
    'percent' => '99.9%',
    'percent_content' => 'Platform <br class="hidden lg:block" />performance uptime '
)) ;
?>


<?php
get_template_part('template-parts/content/info-section-with-image-reverse-lesson', null, array(
    'title' => 'Lessons Learned',
    'heading' => 'The importance of strong collaboration between the bank and its third-party technology providers to prevent misalignment and delays.',   
    'image_url' => get_assets_from_path('images/success_story_lesson.png'),
    'content' => 'The integration of off-the-shelf banking products proved more complex than anticipated, requiring additional customization and effort to meet the bank’s operational needs. Through this experience, the bank has strengthened its approach to vendor engagement and technology adoption, ensuring greater agility and efficiency in future transformation initiatives.'
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