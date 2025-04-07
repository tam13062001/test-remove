<?php /* Template Name: Solution: Digital Transformation Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'background_image' => get_assets_from_path('images/banner_solution_2.png'),
    'title' => 'Platform engineering, the foundation for your digital transformation',
    'breadcrumbs' => array('Our Solution', 'Platform engineering'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'Empower your infrastructure with agility, scalability, security, and efficiency—boosting productivity while reducing overhead.',
    'image_url' => get_assets_from_path('images/cta_bg_2.png'),
    'cta_text' => 'Schedule a consultation with our expert',
    'cta_link' => '#'
));
?>

<?php get_template_part('template-parts/content/slide-building'); ?>

<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'Our digital transformation approach',
    'items' => array(
        array(
            'title' => 'Data Lakehouse',
            'content' => 'Build a scalable data infrastructure to store, process, and manage vast amounts of business data efficiently.',
        ),
        array(
            'title' => 'BI Dashboards & Reporting ',
            'content' => 'Develop interactive dashboards for real-time business insights, helping you make data-driven decisions.',
        ),
        array(
            'title' => 'Custom Machine Learning',
            'content' => 'Implement AI-driven models to enhance predictive analytics, risk assessment, and automation.',
        ),
        array(
            'title' => 'MLOps',
            'content' => 'Deploy and monitor machine learning models to ensure continuous optimization and performance.',
        ),
        array(
            'title' => 'Load Balancing & Scaling',
            'content' => 'Enable your digital ecosystem to handle high-volume transactions seamlessly without sacrificing speed or performance.',
        ),
        array(
            'title' => 'Real-Time Data Streaming',
            'content' => 'Implement AI-driven models to enhance predictive analytics, risk assessment, and automation.',
        ),
        array(
            'title' => 'Generative AI Model Training',
            'content' => 'Train AI models to automate content creation, generate reports, and improve business intelligence.',
        ),
        array(
            'title' => 'NLP Model Development',
            'content' => 'Utilize natural language processing to improve customer interactions and sentiment analysis.',
        ),
        array(
            'title' => 'Chatbot Implementation',
            'content' => 'Deploy AI-powered chatbots for 24/7 customer engagement, streamlining communication and support.',
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
