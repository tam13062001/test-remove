<?php /* Template Name: Service: Data & AI Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner'); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'Transform raw data into actionable insights and intelligent automation—fueling smarter decisions, seamless operations, and sustainable growth ',
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
            'content' => 'increase in operational efficiency through AI-powered automation.'
        ),
        array(
            'percent' => '20%',
            'content' => 'higher customer retention with personalized AI-driven engagement strategies.'
        ),
    )
));
?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'Your Cloud, Reimagined',
    'image_url' => get_assets_from_path('images/mainframe.png'),
    'items' => array(
        array(
            'title' => '',
            'content' => 'At Datum, we do more than analyze data—we unlock its full potential. Our AI-driven solutions integrate seamlessly into your business, enabling predictive analytics, process automation, and deep customer insights. Whether you’re optimizing workflows, enhancing customer experiences, or building next-gen AI applications, we tailor data strategies that align with your vision.',
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
            'content' => 'AI solutions built around your business needs, not just technical feasibility.
Leverage data science and machine learning to drive tangible outcomes.',
        ),
        array(
            'title' => 'End-to-End Expertise',
            'content' => 'From data engineering to AI model deployment and ongoing optimization. <br />
Industry-compliant solutions (GDPR, HIPAA, PCI DSS) tailored for your sector.',
        ),
        array(
            'title' => 'ROI You Can Measure',
            'content' => 'Optimize operations and reduce costs by up to 40% with AI-driven efficiencies. <br />
Unlock new revenue streams with predictive analytics and intelligent automation.',
        )
    ),
)) ;
?>


<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'Reinvent with Data & AI ',
    'items' => array(
        array(
            'title' => 'Data Strategy & Architecture',
            'content' => 'Harness the power of structured and unstructured data with a tailored strategy. <br />
Our experts help design robust, scalable data architectures to support AI and analytics-driven decision-making. ',
        ),
        array(
            'title' => 'Big Data Platform & Analytics',
            'content' => 'Transform raw data into real-time insights with scalable data platforms.
<ul class="list-disc list-inside">
<li>Data Lakehouse & Warehousing: Store and process massive datasets efficiently.</li>
<li>BI Dashboards & Reporting: Gain visibility into trends with interactive analytics.</li>
<li>Real-Time Data Streaming: Enable instant decision-making with live data processing.</li>
</ul>',
        ),
        array(
            'title' => 'Machine Learning & Advanced Analytics',
            'content' => 'Optimize operations and automate decision-making with AI-driven models.
<ul class="list-disc list-inside">
<li>Custom Machine Learning: Solve industry-specific challenges with tailored AI models.</li>
<li>MLOps & Model Scaling: Deploy, monitor, and refine AI models for peak performance.</li>
<li>Load Balancing & Optimization: Ensure reliability under high data loads.</li>
</ul>',
        ),
        array(
            'title' => 'Generative AI & NLP',
            'content' => 'Enhance automation and customer engagement with intelligent AI models.
<ul class="list-disc list-inside">
<li>Generative AI: Automate content creation for personalized experiences.</li>
<li>MLOps & Model Scaling: Deploy, monitor, and refine AI models for peak performance.</li>
<li>Load Balancing & Optimization: Ensure reliability under high data loads.</li>
</ul>',
        ),
        array(
            'title' => 'Data Security & Sharing',
            'content' => 'Protect data integrity and enable secure collaboration.
<ul class="list-disc list-inside">
<li>Governance & Compliance: Ensure regulatory adherence and data protection.</li>
<li>Encryption & Access Control: Secure sensitive data with advanced security layers.</li>
<li>Seamless Data Sharing: Enable controlled access across teams and partners.</li>
</ul>',
        )
    ),
)) ;
?>

<?php get_template_part('template-parts/content/partners'); ?>
<?php get_template_part('template-parts/content/successful-stories'); ?>
<?php get_template_part('template-parts/content/frequently-asked-questions'); ?>
<?php get_template_part('template-parts/content/team'); ?>

<?php get_footer(); ?>
