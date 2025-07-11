<?php /* Template Name: Successful Story Platform Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.PlatformCustomization.title',
    'background_image' => get_assets_from_path('images/banner_solution_3.jpg'),
    'breadcrumbs' => array('breadcrumbs.successful_stories', 'breadcrumbs.platform_customization'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-story', null, array(
    'title' => 'Improving Banking Experience: Refreshing Channels and Enhancing Microservices',
    'heading' => '',
    'content' => 'The client sought to modernize their services, facing challenges in customizing a secure Amazon EKS workload platform to support diverse workloads, ensure compliance with strict regulatory standards, and enhance their microservices architecture.',
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'cta_text' => 'Download the full case study',
    'cta_link' => '#'
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-reverse', null, array(
    'title' => 'Challenge',
    'heading' => '',
        'image_url' => get_assets_from_path('images/man-prevents-servers-overload 1.jpg'),
        'items' => array(
            array(
                'content' => 'Our client required a scalable and secure containerized infrastructure to support various workloads running on Amazon Elastic Kubernetes Service (EKS). ',
            ),
            array(
                'content' => 'The environment needed to accommodate microservices deployed as individual containers, allowing each service to scale independently.',
            ),
            array(
                'content' => 'Additionally, frontend web applications had to seamlessly interact with backend services, while AWS Batch Jobs handled periodic and on-demand data processing tasks.',
            ),
            array(
                'content' => 'Continuous integration and deployment (CI/CD) pipelines leveraged GitLab CI Runner to ensure efficient and automated development workflows.',
            )
        ),
    )) ;    
?>

<?php
get_template_part('template-parts/content/info-section-with-image-reverse-lesson-r', null, array(
    'title' => 'When Technical Solutions Drive Compliance',
    'heading' => '',   
    'image_url' => get_assets_from_path('images/image 20.jpg'),
    'items' => array(
        array(
           'content' => 'Streamlining Operations: Implemented a scalable platform to handle diverse workloads (microservices, applications, data processing, and deployments) while maintaining strong departmental isolation for cost and accountability.',
        ),
        array(
           'content' => 'Strengthening Security: Established robust inter-service communications with advanced encryption and integrated tools for monitoring, performance, and security compliance.',
        ),
        array(
           'content' => 'Ensuring Reliability: Delivered high availability and consistent infrastructure management without incurring excessive costs, supporting seamless growth and regulatory standards.'
        ),
    ),
    

)) ;
?>


<?php
get_template_part('template-parts/content/info-section-with-image-story-percent-l', null, array(
    'title' => 'Impactful Outcome',
    'heading' => '',   
    'items' => array(
        array(
           'content' => 'Platform Uptime: Achieved 99.9% uptime for the platform and key services.',
        ),
        array(
           'content' => 'Deployment Efficiency: Fully automated CI/CD pipeline enabled zero downtime deployments.'
        ),
        array(
           'content' => 'Compliance and Security: Customized EKS to meet strict regulatory and security standards.'
        ),
        array(
           'content' => 'Scalability: Supported full front-end refreshes, new backend-for-frontend developments, and integrations for new banking products.'
        ),
    ),
    'image_url' => get_assets_from_path('images/man-prevents-servers-overload-2.jpg'),    
    'percent' => '99.9%',
    'percent_content' => 'Platform <br class="hidden lg:block" />performance uptime '       
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