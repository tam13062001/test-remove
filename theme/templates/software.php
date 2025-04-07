<?php /* Template Name: Service: Software Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Pioneering software engineering for Future-Ready Enterprises',
    'breadcrumbs' => array('Our Services', 'Software'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'Elevate your software from a functional tool to a strategic driver of efficiency, innovation, and growth.',
    'image_url' => get_assets_from_path('images/cta_bg_2.png'),
    'cta_text' => 'Schedule a consultation with our expert',
    'cta_link' => '#'
));
?>

<?php
get_template_part('template-parts/content/percentage-column-info', null, array(
    'title' => 'Cloud now',
    'items' => array(
        array(
            'percent' => '40%',
            'content' => 'increase in operational efficiency by automating key business processes with custom software solutions.'
        ),
        array(
            'percent' => '25%',
            'content' => 'faster time-to-market with agile development frameworks and scalable architectures.'
        ),
    )
));
?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'Your Cloud, Reinvented',
    'image_url' => get_assets_from_path('images/mainframe.png'),
    'items' => array(
        array(
            'title' => '',
            'content' => 'At Datum, we integrate legacy platforms with modern technologies to enhance agility and scalability. Our solutions—spanning API management, process automation, and fault-tolerant architectures—enable seamless innovation without disrupting operations. ',
        )
    ),
)) ; ?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'Why Datum',
    'image_url' => get_assets_from_path('images/green-rack.png'),
    'items' => array(
        array(
            'title' => 'Business-Centric Approach',
            'content' => 'Software solutions designed to meet your business goals, not just technical requirements.
Balance scalability, security, and cost-effectiveness to maximize efficiency.',
        ),
        array(
            'title' => 'Full-Cycle Development',
            'content' => 'From ideation to deployment, we handle everything: UI/UX design, API integration, automation, and cloud-based architecture.
Industry-compliant solutions tailored for security and regulatory standards (GDPR, HIPAA, PCI DSS).',
        ),
        array(
            'title' => 'ROI You Can Measure',
            'content' => 'Reduce software maintenance costs by 30-50% while improving performance. <br />
Leverage data-driven insights to accelerate decision-making and innovation.',
        )
    ),
)) ;
?>


<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'Innovate Beyond Limits with Software',
    'items' => array(
        array(
            'title' => 'Platform & System Development',
            'content' => 'We build scalable, secure, and high-performance platforms tailored to your business needs, from enterprise systems to SaaS solutions. Our services include:
<ul class="list-disc list-inside">
<li>SaaS platform development</li>
<li>Enterprise systems (ERP, CRM)</li>
<li>API & legacy system integration</li>
<li>Microservices architecture</li>
</ul>',
        ),
        array(
            'title' => 'Architecture <br class="hidden lg:block" /> and Design',
            'content' => 'We will team up with your business and technology stakeholders to help define the objectives
 which align with people, business, and technology. Our certified Architects then analyze the requirements 
 as they stands for today and into the future, and present you with secure, resilient, cost effective, and 
 Compliance-ready solutions.',
        ),
        array(
            'title' => 'Web Application',
            'content' => 'We build high-performance web applications with responsive design, secure authentication, and seamless API integrations. Our web solutions enhance user experience while optimizing speed, scalability, and accessibility.',
        ),
        array(
            'title' => 'Mobile Application',
            'content' => 'From native to cross-platform development, we create intuitive mobile applications for iOS and Android. Our apps offer seamless user interaction, secure transactions, and real-time data synchronization..',
        ),
        array(
            'title' => 'Data-Driven Application',
            'content' => 'Harness the power of big data and AI with intelligent applications. We develop predictive analytics tools, machine learning-powered platforms, and automated decision-making systems to unlock actionable insights.
<ul class="list-disc list-inside">
    <li>Business Intelligence & analytics</li>
    <li>Machine learning & deep learning applications</li>
    <li>Data warehouses & data lakes</li>
    <li>Real-time data processing</li>
<ul>',
        ),
    ),
)) ;
?>

<?php get_template_part('template-parts/content/partners'); ?>
<?php get_template_part('template-parts/content/successful-stories'); ?>
<?php get_template_part('template-parts/content/frequently-asked-questions'); ?>
<?php get_template_part('template-parts/content/team'); ?>

<?php get_footer(); ?>
