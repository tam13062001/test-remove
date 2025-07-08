<?php /* Template Name: Service: Software Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.software.title',
    'breadcrumbs' => array('breadcrumbs.services', 'breadcrumbs.software'),
    'background_image' => get_assets_from_path('videos/software_banner_video.mp4'),
    'type' => 'video'
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'hero.software',
    'image_url' => get_assets_from_path('images/sv-s-bg.png'),
    'cta_text' => 'cta.schedule',
    'cta_link' => '#'
));
?>

<?php
get_template_part('template-parts/content/percentage-column-info', null, array(
    'title' => 'software_percentage.title',
    'items' => array(
        array(
            'percent' => '40%',
            'content' => 'software_percentage.items.0.content'
        ),
        array(
            'percent' => '25%',
            'content' => 'software_percentage.items.1.content'
        ),
    )
));
?>

<?php
get_template_part('template-parts/content/info-section-with-image-cloud', null, array(
    'title' => 'software_section.title',
    'image_url' => get_assets_from_path('images/img_7.png'),
    'items' => array(
        array(
            'title' => '',
            'content' => 'software_section.items.0.content',
        )
    ),
)) ; ?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'why_datum_software.title',
    'image_url' => get_assets_from_path('images/sv-ai-whydatum.png'),
    'items' => array(
        array(
            'title' => 'why_datum_software.items.0.title',
            'content' => 'why_datum_software.items.0.content',
        ),
        array(
            'title' => 'why_datum_software.items.1.title',
            'content' => 'why_datum_software.items.1.content',
        ),
        array(
            'title' => 'why_datum_software.items.2.title',
            'content' => 'why_datum_software.items.2.content',
        )
    ),
));
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

<?php get_template_part('template-parts/content/partners-about-datum'); ?>
<?php get_template_part('template-parts/content/successful-stories-banking', null, array(
    'title' => 'banking_stories.title',
    'title_1' => 'banking_stories.story_1',
    'title_2' => 'banking_stories.story_2',
)); ?>
<?php get_template_part('template-parts/content/frequently-asked-questions', null, array(
    'items' => array(
        array(
            'title' => 'What are the benefits of custom software development?',
            'content' => 'Custom software is tailored to your business needs, improving efficiency, scalability, and security. It offers greater flexibility than off-the-shelf solutions and enhances integration with existing systems, ensuring long-term growth and competitive advantage.'
        ),
        array(
            'title' => 'How do I determine the right software solution for my business?',
            'content' => 'Start by assessing your business goals, workflows, and challenges. Consult with a software development expert to identify whether a custom-built, off-the-shelf, or hybrid solution best fits your needs in terms of functionality, budget, and scalability.'
        ),
        array(
            'title' => 'What makes enterprise software scalable?',
            'content' => 'Scalable enterprise software is designed with modular architecture, cloud-based infrastructure, and microservices to handle growing data, users, and workloads efficiently. It ensures seamless performance, flexibility, and cost-effectiveness as your business expands'),
        array(
            'title' => 'How can AI improve software applications?',
            'content' => 'AI enhances software by automating tasks, improving decision-making, and personalizing user experiences. Features like predictive analytics, natural language processing (NLP), and machine learning (ML) help businesses optimize operations and drive innovation.'),
        array(
            'title' => 'How do cloud-based solutions integrate with existing software?',
            'content' => 'Cloud solutions integrate via APIs, middleware, or hybrid cloud architectures. They enable seamless data exchange, scalability, and security, allowing businesses to modernize operations while maintaining compatibility with legacy systems.'),
        array(
            'title' => 'How to ensure data security in software development?',
            'content' =>'Implement strong encryption, secure coding practices, and access controls. Regular security testing, compliance with industry standards (e.g., GDPR, ISO 27001), and cloud security measures help protect sensitive business data from cyber threats.'),
        array(
            'title' => 'What are the benefits of custom software development?',
            'content' => 'Custom software is tailored to your business needs, improving efficiency, scalability, and security. It offers greater flexibility than off-the-shelf solutions and enhances integration with existing systems, ensuring long-term growth and competitive advantage.'),
        ),
    'text_title'=>'Software'
)); ?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.title_software',
    'content' => 'team_section.content',
    'btn_text' => 'cta.schedule',
    'btn_link' => '#'
)); ?>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>
