<?php /* Template Name: Successful Story Platform Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'EKS Workload Platform Customization and Retail Channel Microservices for BBX',
    'background_image' => get_assets_from_path('images/success_story_platform.jpg'),
    'breadcrumbs' => array('Successful stories', 'Platform Customization'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-story', null, array(
    'title' => 'Call for Change',
    'heading' => 'Transforming Retail Banking Infrastructure for a Seamless Digital Experience',
    'content' => 'A Prestigious Banking Partner embarked on the Better Banking Experience (BBX) initiative to modernize digital channels, integrate value-added products, and enhance microservices. Datum customized the EKS workload platform to align with stringent security and regulatory standards, enabling a scalable, resilient foundation. The implementation supported critical banking microservices and successfully went live in mid-2024.',
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'cta_text' => 'Download detail case study',
    'cta_link' => '#'
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-reverse', null, array(
    'title' => 'The Challenge',
    'heading' => 'Modernizing banking infrastructure to enable secure, scalable, and efficient delivery of digital services.',
    'image_url' => get_assets_from_path('images/man-prevents-servers-overload 1.jpg'),
    'items' => array(
        array(
            'content' => 'Full platform overhaul to power BBX with modern frontend, backend, and integrations.',
        ),
        array(
            'content' => 'Transform legacy systems which  hindered scale with inefficiencies, risks, and poor governance.',
        ),
        array(
            'content' => 'A shift to a multi-tenancy hosting model was critical to improve resource allocation, departmental isolation, and cost transparency.',
        )
    ),
)) ;    
?>

<?php
get_template_part('template-parts/content/info-section-with-image-reverse-lesson-r', null, array(
    'title' => 'The Solution: Datum’s EKS-Powered Platform',
    'heading' => 'Datum delivered a resilient, secure, and automated EKS platform tailored for enterprise microservices.',   
    'image_url' => get_assets_from_path('images/image 20.jpg'),
    'content' => 'We used Istio for enhanced security, Terraform for automating infrastructure, and ArgoCD for smooth updates. The setup across multiple zones ensured high availability, while security tools helped maintain compliance. By using different node groups, they optimized costs and kept workloads separate for different teams. They also built in disaster recovery to boost resilience.'
)) ;
?>


<?php
get_template_part('template-parts/content/info-section-with-image-story-percent-l', null, array(
    'title' => 'A Meaningful Impact',
    'heading' => 'Datum delivered a resilient, secure, and automated EKS platform tailored for enterprise microservices.',   
    'content' => 'The new EKS platform helped the bank reach 99.9% uptime with automated CI/CD pipelines and smooth zero-downtime deployments. It supported the BBX initiative, enabling new microservices, frontend updates, and third-party integrations. Datum’s skills in design and implementation made it a key partner for ongoing modernization projects. This change boosted efficiency, improved security, and created a scalable base for future digital growth.',   
    'image_url' => get_assets_from_path('images/man-prevents-servers-overload-2.jpg'),
    'percent' => '99.9%',
    'percent_content' => 'Platform performance uptime '            
)) ;
?>

<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'Get consulted by our expert',
    'content' => 'Talk with our expert to start building your platform',
    'btn_text' => 'Schedule a consultation with our expert',
    'btn_link' => '#'
)); ?>


<?php get_footer(); ?>