<?php /* Template Name: Service: Data & AI Template */ ?>
<?php get_header(); ?>

<?php
get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.data_ai.title',
    'breadcrumbs' => array('breadcrumbs.services', 'breadcrumbs.data_ai'),
    'background_image' => get_assets_from_path('videos/homepage_data_ai.mp4'),
    'type' => 'video'
));
?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'hero.data',
    'image_url' => get_assets_from_path('images/Layer_1.png'),
    'cta_text' => 'cta.schedule',
    'cta_link' => '#'
));
?>

<?php
get_template_part('template-parts/content/percentage-column-info', null, array(
    'title' => 'data_ai_percentage.title',
    'items' => array(
        array(
            'percent' => '30%',
            'content' => 'data_ai_percentage.items.0.content',
        ),
        array(
            'percent' => '20%',
            'content' => 'data_ai_percentage.items.1.content',
        ),
    )
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image-data_ai', null, array(
    'title' => 'data_ai_section.title',
    'image_url' => get_assets_from_path('images/mainframe2.png'),
    'items' => array(
        array(
            'title' => '',
            'content' => 'data_ai_section.items.0.content',
        )
    ),
));
?>


<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'why_datum_ai.title',
    'image_url' => get_assets_from_path('images/sv-ai-whydatum.png'),
    'items' => array(
        array(
            'title' => 'why_datum_ai.items.0.title',
            'content' => 'why_datum_ai.items.0.content',
        ),
        array(
            'title' => 'why_datum_ai.items.1.title',
            'content' => 'why_datum_ai.items.1.content',
        ),
        array(
            'title' => 'why_datum_ai.items.2.title',
            'content' => 'why_datum_ai.items.2.content',
        )
    ),
));
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
));
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
            'title' => 'What is Big Data?',
            'content' => 'Big Data refers to vast volumes of structured and unstructured data generated at high speed. It enables businesses to analyze patterns, predict trends, and make data-driven decisions using advanced analytics, AI, and machine learning.'
        ),
        array(
            'title' => 'How can I use AI to improve customer experiences?',
            'content' => 'AI enhances customer experiences through chatbots, personalized recommendations, sentiment analysis, and predictive analytics. It automates responses, understands user behavior, and delivers real-time insights to optimize customer interactions.'
        ),
        array(
            'title' => 'How does AI improve business decisions?',
            'content' => 'AI-driven analytics process large datasets to uncover patterns, predict outcomes, and provide actionable insights. Businesses use AI for demand forecasting, risk management, and data-driven strategies, leading to smarter, faster decisions.'),
        array(
            'title' => 'What industries benefit the most from AI-powered analytics?',
            'content' => 'Industries such as healthcare, finance, retail, manufacturing, and logistics benefit from AI analytics. AI helps detect fraud, optimize supply chains, personalize marketing, and enhance diagnostics, driving efficiency and innovation.'),
        array(
            'title' => 'Why is real-time data processing important?',
            'content' =>'Real-time data processing allows businesses to react instantly to market changes, detect anomalies, and improve decision-making. It\'s crucial for financial transactions, cybersecurity, IoT applications, and customer service automation. '),
        array(
            'title' => 'How to ensure data security and compliance?',
            'content' => 'Ensure data security with encryption, access controls, and compliance with regulations like GDPR and HIPAA. Regular audits, AI-powered threat detection, and secure data_ai storage help protect sensitive data from breaches.'),
        ),
        array(
            'title' => 'What is Big Data?',
            'content' => 'Big Data refers to vast volumes of structured and unstructured data generated at high speed. It enables businesses to analyze patterns, predict trends, and make data-driven decisions using advanced analytics, AI, and machine learning.',
        ),
        'text_title'=>'Data-AI'
    ));
?>
<?php get_template_part('template-parts/content/team', null, array(
    'title' => 'team_section.title_data_ai',
    'content' => 'team_section.content',
    'btn_text' => 'cta.schedule',
    'btn_link' => '#'
)); ?>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>