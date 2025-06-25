<?php /* Template Name: Successful Story Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Redefining Banking Excellence: A Secure Landing Zone Transformation',
    'background_image' => get_assets_from_path('images/success_story_bank.png'),
    'breadcrumbs' => array('Successful Stories', 'Premier Banking'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-story', null, array(
    'title' => 'Call for Change',
    'content' => 'Facing security vulnerabilities, governance challenges, and the need for a digital refresh, a leading bank embarked on a Landing Zone transformation with Datum Consulting. By implementing an AWS Landing Zone and EKS Workload Platform, the bank achieved seamless cloud migration, cost optimization, and regulatory compliance. This modernized infrastructure enabled secure multi-tenancy hosting, automated pipelines, and efficient deployment of banking microservices, powering the Better Banking Experience (BBX) initiative.',
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'cta_text' => 'Download the full case study',
    'cta_link' => '#'
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-reverse', null, array(
    'title' => 'When Tech Meets Banking Excellence',
    'heading' => ' ',   
    'image_url' => get_assets_from_path('images/story_tech_meet_banking.png'),
    'items' => array(
        array(
            'content' => 'The bank faces critical challenges in security, resource management, and compliance, hindering its digital transformation.',
        ),
        array(
            'content' => 'AWS Landing Zone provides a scalable, secure foundation to streamline governance, automate infrastructure deployment, and enforce best practices',
        ),
        array(
            'content' => 'By integrating structured controls, centralized auditing, and optimized resource allocation, the bank can modernize digital channels, accelerate innovation, and ensure seamless adoption of next-generation banking solutions.',
        ),
    ),
)) ;
?>

<?php
get_template_part('template-parts/content/info-section-with-image-story-percent', null, array(
    'title' => 'A Valuable Difference',
    'content' => 'The project successfully eliminated security vulnerabilities, enforced role-based access and least privilege policies, and ensured full alignment with Philippine banking regulations. Automated CI/CD pipelines and zero-downtime deployments accelerated innovation, while provisioning 30+ environments streamlined workload management. Large on-prem applications were seamlessly migrated, supporting BBX initiatives such as frontend modernization and backend-for-frontend integration. With 99.9% platform uptime, optimized resource utilization, and significantly reduced manual efforts, the bank is now equipped for sustained growth. Datum Consulting has become a strategic, long-term partner, continuously supporting new migrations and future banking advancements.',   
    'image_url' => get_assets_from_path('images/success_story_meaningfull.jpg'),
    'percent' => '99.9%',
    'percent_content' => 'Platform <br class="hidden lg:block" />performance uptime '
)) ;
?>


<?php
get_template_part('template-parts/content/info-section-with-image-reverse-lesson', null, array(
    'title' => 'Lessons Learned',
    'heading' => '',   
    'image_url' => get_assets_from_path('images/success_story_lesson.png'),
    'content' => 'A key takeaway from this initiative was the importance of strong collaboration between the bank and its third-party technology providers to prevent misalignment and delays. The integration of off-the-shelf banking products proved more complex than anticipated, requiring additional customization and effort to meet the bank’s operational needs. Through this experience, the bank has strengthened its approach to vendor engagement and technology adoption, ensuring greater agility and efficiency in future transformation initiatives.'
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