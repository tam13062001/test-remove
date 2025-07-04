<?php /* Template Name: Service: Cloud Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Designing cloud ecosystems that scale with your ambition',
    'breadcrumbs' => array('Our Services', 'Cloud'),
    'background_image' => get_assets_from_path('videos/cloud_banner_video.mp4'),
    'type' => 'video'
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'Transform your cloud infrastructure from a technical necessity to a strategic powerhouse – engineered to grow, adapt, and drive your business forward.',
    'image_url' => get_assets_from_path('images/cta_bg_1.png'),
    'cta_text' => 'Schedule a consultation with our expert',
    'cta_link' => '#'
));
?>

<?php
get_template_part('template-parts/content/percentage-column-info', null, array(
    'title' => 'Cloud now',
    'items' => array(
        array(
            'percent' => '30%',
            'content' => 'reducing operational costs when migrating core banking systems to the cloud'
        ),
        array(
            'percent' => '20%',
            'content' => 'cutting inventory cost when Implementing AI-powered demand forecasting, '
        ),
    )
));
?>

<?php
get_template_part('template-parts/content/info-section-with-image-cloud', null, array(
    'title' => 'Your Cloud, Reimagined',
    'image_url' => get_assets_from_path('images/mainframe.png'),
    'items' => array(
        array(
            'title' => '',
            'content' => 'At Datum, we don’t just migrate systems to the cloud—<b>we architect tailored ecosystems
 that align with your vision, industry demands, and future goals.</b> Whether you’re streamlining operations,
 launching disruptive innovations, or expanding globally, our cloud solutions are designed to evolve with 
 your ambition.',
        )
    ),
)) ; ?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'Why Datum',
    'image_url' => get_assets_from_path('images/green-rack.png'),
    'items' => array(
        array(
            'title' => 'Strategic Alignment',
            'content' => 'Cloud strategies built around your business objectives, not just technical specs.
Balance scalability, security, and cost-efficiency to fuel growth.',
        ),
        array(
            'title' => 'End-to-End Expertise',
            'content' => 'From migration to optimization, multi-cloud orchestration, and AI-driven automation.
Compliance-ready solutions (GDPR, HIPAA, PCI DSS) tailored to your industry.',
        ),
        array(
            'title' => 'ROI You Can Measure',
            'content' => 'Reduce infrastructure costs by 30–50% while boosting performance.
Turn your cloud into a profit center with data-driven insights and innovation accelerators.',
        )
    ),
)) ;
?>


<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'Reinvent with cloud',
    'items' => array(
        array(
            'title' => 'Cloud <br />Transformation',
            'content' => 'Through partnerships with leading cloud vendors, Datum Consulting can take you from the very beginning of your cloud journey, be it public, private or hybrid cloud. Our services include:
<ul class="list-disc list-inside">
<li>Cloud readiness assessment</li>
<li>Cloud strategy and road mapping</li>
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
            'title' => 'API and <br class="hidden lg:block"/> Integration',
            'content' => 'We understand that technology and business must be integrated to generate new opportunities for your organization in the new digital age. Our ability to develop API strategies, connect data backed systems, and navigating complex hybrid platforms with legacy and cloud system can help you leverage existing assets to innovate.',
        ),
        array(
            'title' => 'Cloud infrastructure <br class="hidden lg:block" /> automation',
            'content' => 'Efficient provisioning and traceable infrastructure can help you achieve high cost effectiveness, high availability, and resiliency. Datum Consulting will provide you with the knowledge needed to implement modern infrastructure automation, containers, and configuration management tools to alleviate complexity of orchestrating the cloud.',
        ),
        array(
            'title' => 'Security Audit and Threat Monitoring',
            'content' => 'Security audit and threat monitoring should be ongoing activities. Our consulting services will help you identify and rededicate weak spots across your cloud infrastructure and information services:',
        ),
        array(
            'title' => 'Compliance Audit',
            'content' => 'We work together to ensure your infrastructure and applications meet specific compliance requirements:
<ul class="list-disc list-inside">
    <li>General Data Projection (GPDR)</li>
    <li>Healthcare (HIPAA)</li>
    <li>Payments (PCI-DSS)</li>
    <li>Insurance (SOC) and Finance (SOX)</li>
<ul>',
        ),
        array(
            'title' => 'Cost optimization',
            'content' => 'We work together to ensure your infrastructure and applications meet specific compliance requirements:
<ul class="list-disc list-inside">
    <li>Right sizing and TCO analysis</li>
    <li>Reservation and commitment plan</li>
    <li>Tuning architecture for cost reduction</li>
<ul />',
        ),
    ),
)) ;
?>

<?php get_template_part('template-parts/content/partners-about-datum'); ?>
<?php get_template_part('template-parts/content/successful-stories-banking',null,array(
    'title' => 'Success Stories in Banking',
    'title_1' => 'Customizing a secure Amazon EKS workload platform for a Prestigious Banking Partner',
    'title_2' => 'Redefining Banking Excellence: A Secure Landing Zone Transformation',
)); ?>
<?php get_template_part('template-parts/content/frequently-asked-questions', null, array(
    'items' => array(
    array(
        'title' => 'What is Cloud Computing?',
        'content' => 'Cloud computing is the delivery of computing services—such as storage, servers, databases, networking, and software—over the internet, enabling flexible and scalable IT solutions.'
    ),
    array(
        'title' => 'What are the benefits of cloud computing?',
        'content' => 'Cloud computing offers cost savings, scalability, enhanced security, remote accessibility, and automatic updates, helping businesses improve efficiency and agility.'
    ),
    array(
        'title' => 'Is cloud migration suitable for my business/enterprise application?',
        'content' => 'Cloud migration is ideal for businesses seeking scalability, cost-efficiency, and better performance. A cloud readiness assessment can help determine the best approach for your enterprise.'),
    array(
        'title' => 'What are the costs involved in cloud adoption?',
        'content' => 'Cloud costs depend on factors like infrastructure, storage, data transfer, and security needs. Pay-as-you-go pricing helps optimize expenses based on actual usage.'),
    array(
        'title' => 'How does virtualized platform help in implementing cloud solutions?',
        'content' => 'Virtualization enables efficient resource allocation, scalability, and flexibility, making it easier to deploy and manage cloud-based applications.'),
    array(
        'title' => 'What workloads can I move to the cloud?',
        'content' =>'Common workloads include web applications, databases, analytics, DevOps environments, and enterprise software like CRM and ERP systems'),
    array(
        'title' => 'What are the basic characteristics of cloud computing?',
        'content' => 'Key characteristics include on-demand self-service, scalability, resource pooling, rapid elasticity, pay-per-use pricing, and broad network access.'),
    ),
    'text_title'=>'Cloud'
)); ?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'Ready to Cloud ?',
    'content' => 'Talk with our expert to start your cloud journey today',
    'btn_text' => 'Schedule a consultation with our expert',
    'btn_link' => '#'
)); ?>

<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>
