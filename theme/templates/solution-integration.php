<?php /* Template Name: Solution: Integration Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'background_image' => get_assets_from_path('images/banner_solution_3.png'),
    'title' => 'Seamless Integration for Scalable & Secure Digital Transformation',
    'breadcrumbs' => array('Our Solution', 'Integration'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'Unify your business systems, streamline operations, and enhance data flow with seamless integration solutions that drive efficiency and innovation',
    'image_url' => get_assets_from_path('images/cta_bg_2.png'),
    'cta_text' => 'Schedule a consultation with our expert',
    'cta_link' => '#'
));
?>

<?php get_template_part('template-parts/content/slide-building'); ?>

<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'Our Integration Approach',
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
        array(
            'title' => 'What is system integration and why is it important?',
            'content' => 'System integration connects different IT systems, applications, and data sources to work seamlessly as a unified system. It improves efficiency, reduces data silos, and enhances decision-making by ensuring smooth data flow across departments.',
        ),
    ),
)) ;
?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'Why Datum',
    'image_url' => get_assets_from_path('images/WhyDatum-Solution.png'),
    'items' => array(
        array(
            'title' => ' Top-level experts',
            'content' => 'Our team consists of top-level professionals with specialized expertise, solution architects, designers, content strategists, software architects, and developers.',
        ),
        array(
            'title' => 'Industry specialized expertise',
            'content' => 'Ensure security and compliance standards in highly demanding industries such as digital banking while maintaining the platform’s scalability and agility.',
        ),
        array(
            'title' => 'Your partner in growth',
            'content' => 'Work closely with your team and other developers even after the platform completion to guarantee implementation and scale up according to your specific needs. ',
        )
    ),
)) ;
?>

<?php get_template_part('template-parts/content/successful-stories'); ?>
<?php get_template_part('template-parts/content/frequently-asked-questions'); ?>
<?php get_template_part('template-parts/content/Expert-insight'); ?>
<?php get_template_part('template-parts/content/team'); ?>

<?php get_footer(); ?>
