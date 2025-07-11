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
    'title' => 'Building from the ground up',
    'data' => array(
        array(
            'title' => 'Improves security and compliance',
            'image_url' => get_assets_from_path('images/slide-digital3.jpg')
        ),
        array(
            'title' => 'Increased development velocity',
            'image_url' => get_assets_from_path('images/slide-image-4.jpeg')
        ),
        array(
            'title' => 'Enhanced operational efficiency',
            'image_url' => get_assets_from_path('images/slide-image-5.jpeg')
        )
    )
)); ?>

<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'Our platform engineer approach',
    'items' => array(
        array(
            'title' => 'CI/CD Pipelines',
            'content' => 'Automating the software delivery process to enable frequent and reliable code changes and releases.',
        ),
        array(
            'title' => 'Containerization and  <br class="hidden lg:block" /> Orchestration',
            'content' => 'Using technologies like Docker and Kubernetes to manage containers that encapsulate application components',
        ),
        array(
            'title' => 'API Management',
            'content' => 'Providing tools and services to create, manage, and secure APIs.',
        ),
        array(
            'title' => 'Infrastructure as Code  <br class="hidden lg:block" /> (IaC)',
            'content' => 'Managing and provisioning infrastructure through code instead of through manual processes.',
        ),
        array(
            'title' => 'Cloud-Native <br class="hidden lg:block" /> Development',
            'content' => 'Building and deploying applications that are designed to run in the cloud, taking full advantage of cloud computing benefits',
        ),
        array(
            'title' => 'DevSecOps',
            'content' => 'Integrating security practices within the DevOps process to ensure secure code development and deployment.',
        ),
        array(
            'title' => 'Monitoring and Logging
',
            'content' => 'Implementing systems that track application performance and user activities, providing insights into system health.',
        ),
        array(
            'title' => 'Security and Compliance',
            'content' => 'Ensuring that the platform adheres to security best practices and meets regulatory compliance requirements',
        ),
        array(
            'title' => 'Resilience',
            'content' => 'Designed to handle failure gracefully such as circuit breaking, graceful degradation, HA, DR ...',
        ),
        array(
            'title' => 'Microservices <br class="hidden lg:block" /> Architecture',
            'content' => 'Designing and implementing a microservices architecture to make applications more scalable and easier to develop.',
        ),
        array(
            'title' => 'Developer Portals and  <br class="hidden lg:block" /> Documentation',
            'content' => 'Creating comprehensive documentation and developer portals to improve the developer experience',
        ),
        array(
            'title' => 'Scalability',
            'content' => 'Designed to be easily scalable, allowing for quick and efficient horizontal scaling as demand increases',
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
            'title' => 'What is platform engineering?',
            'content' => 'Platform engineering is the discipline of designing and building self-service internal platforms to streamline software development and operations. It enables teams to deliver applications efficiently by providing standardized tools, automation, and infrastructure management.',
        ),
        array(
            'title' => 'How does platform engineering differ from DevOps and SRE?',
            'content' => 'While DevOps focuses on collaboration and automation across development and operations, and Site Reliability Engineering (SRE) emphasizes system reliability, platform engineering builds internal developer platforms (IDPs) to provide self-service capabilities, reducing cognitive load and improving developer productivity.',
        ),
        array(
            'title' => 'Why is platform engineering important for modern enterprises?',
            'content' => 'Platform engineering enhances developer efficiency, reduces operational overhead, and improves system reliability. It allows enterprises to scale software delivery by automating workflows, standardizing infrastructure, and enabling self-service access to development environments.',
        ),
        array(
            'title' => 'What are the key components of a platform engineering strategy?',
            'content' => 'A strong platform engineering strategy includes automation, self-service developer platforms, security policies, observability tools, and integration with CI/CD pipelines. It should align with business objectives to enhance software delivery speed and reliability.',
        ),
        array(
            'title' => 'How does platform engineering improve developer experience (DevEx)?',
            'content' => 'Platform engineering simplifies infrastructure management, automates repetitive tasks, and provides intuitive self-service tools, reducing friction in the development process. This improves developer productivity, job satisfaction, and overall software quality.',
        ),
        array(
            'title' => 'What are the benefits of implementing an internal developer platform (IDP)?',
            'content' => 'An IDP centralizes development tools, automates workflows, and enforces best practices, reducing complexity and improving deployment speed. It enables developers to focus on coding rather than infrastructure, leading to faster innovation and reduced operational costs.',
        ),
        // array(
        //     'title' => 'What is platform engineering?',
        //     'content' => 'Platform engineering is the discipline of designing and building self-service internal platforms to streamline software development and operations. It enables teams to deliver applications efficiently by providing standardized tools, automation, and infrastructure management.',
        // ),
    )

));
?>
<?php get_template_part('template-parts/content/Expert-insight'); ?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.get_consulted',
    'content' => 'team_section.content_1',
    'btn_text' => 'cta.schedule',
    'btn_link' => '#'
)); ?>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>
