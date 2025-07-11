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
    'title' => 'Building from the ground up',
    'data' => array(
        array(
            'title' => 'Connecting disparate systems for a cohesive infrastructure',
            'image_url' => get_assets_from_path('images/slide-image-7.jpeg')
        ),
        array(
            'title' => 'Automating workflows to reduce manual processes',
            'image_url' => get_assets_from_path('images/slide-image-8.png')
        ),
        array(
            'title' => 'Driving operational efficiency and customer engagement',
            'image_url' => get_assets_from_path('images/slide-image-2.jpeg')
        )
    )
)); ?>

<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'Our Integration Approach',
    'items' => array(
        array(
            'title' => 'Legacy System Integration',
            'content' => 'Upgrade and integrate legacy systems with modern platforms to maximize existing investments and improve efficiency.',
        ),
        array(
            'title' => 'Cloud Migration and Integration',
            'content' => 'Seamlessly migrate applications and data to the cloud while integrating with cloud-native services for scalability.',
        ),
        array(
            'title' => 'Microservices Architecture',
            'content' => 'Transition from monolithic applications to a microservices-based architecture, enhancing modularity, maintainability, and scalability.',
        ),
        array(
            'title' => 'Data Sharing Integration',
            'content' => 'Establish secure data-sharing mechanisms to enhance collaboration across teams and external partners, unlocking new business opportunities.',
        ),
        array(
            'title' => 'Data Catalog and Governance',
            'content' => 'Implement governance frameworks to ensure data quality, discoverability, and regulatory compliance across the organization.',
        ),
        array(
            'title' => 'Data Migration and Synchronization',
            'content' => 'Enable seamless data migration between systems with real-time or scheduled synchronization to maintain consistency.',
        ),
        array(
            'title' => 'Load Balancing and Scaling',
            'content' => 'Distribute traffic efficiently across resources to optimize performance and scalability under varying workloads.',
        ),
        array(
            'title' => 'Performance Optimization',
            'content' => 'Enhance system performance through integration, improving processing speed and reliability while reducing bottlenecks.',
        ),
        array(
            'title' => 'Fault-Tolerant Architecture',
            'content' => 'Design and implement resilient systems that ensure high availability, minimizing downtime and ensuring business continuity.',
        ),
        array(
            'title' => 'Data Lakehouse Implementation',
            'content' => 'Build scalable data lakehouses to centralize, organize, and analyze structured and unstructured data efficiently.',
        ),
        array(
            'title' => 'Data Integration Pipelines',
            'content' => 'Develop and orchestrate efficient ETL/ELT pipelines for seamless data extraction, transformation, and loading.',
        ),
        array(
            'title' => 'Real-Time Data Streaming',
            'content' => 'Implement real-time data streaming platforms to process and analyze high-velocity data, enabling instant decision-making.',
        ),
    ),
)) ;
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
<?php get_template_part('template-parts/content/frequently-asked-questions', null, array(
    'items' => array(
        array(
            'title' => 'What is system integration and why is it important?',
            'content' => 'System integration connects different IT systems, applications, and data sources to work seamlessly as a unified system. It improves efficiency, reduces data silos, and enhances decision-making by ensuring smooth data flow across departments.',
        ),
        array(
            'title' => 'How does API integration improve business efficiency?',
            'content' => 'API integration allows applications to communicate and share data in real time, automating workflows, reducing manual tasks, and improving customer experience. It enables businesses to scale quickly and integrate new services effortlessly.',
        ),
        array(
            'title' => 'How can cloud integration benefit my business?',
            'content' => 'Cloud integration connects on-premise and cloud-based systems, ensuring real-time data synchronization, enhanced collaboration, and better scalability. It also improves security, reduces IT infrastructure costs, and supports remote work capabilities.',
        ),
        array(
            'title' => 'What security measures are included in integration solutions?',
            'content' => 'Integration solutions include data encryption, API authentication, role-based access control (RBAC), firewalls, and threat monitoring to protect data integrity and prevent cyber threats during data exchanges.',
        ),
        array(
            'title' => 'What is real-time data streaming, and how does it work?',
            'content' => 'Real-time data streaming enables continuous data transmission between systems as events occur. It works by processing data instantly through event-driven architecture, ensuring businesses can react to insights, monitor operations, and enhance customer experiences in real time.',
        ),
    ),
)); ?>
<?php get_template_part('template-parts/content/Expert-insight'); ?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.get_consulted',
    'content' => 'team_section.content_1',
    'btn_text' => 'cta.schedule',
    'btn_link' => '#'
)); ?>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>
