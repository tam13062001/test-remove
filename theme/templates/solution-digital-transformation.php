<?php /* Template Name: Solution: Digital Transformation Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'background_image' => get_assets_from_path('images/banner_solution_2.jpg'),
    'title' => 'banner.Digital.title',
    'breadcrumbs' => array('breadcrumbs.solution', 'breadcrumbs.digital'),
)); ?>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' =>  'hero.digital',
    'image_url' => get_assets_from_path('images/solution-digital.png'),
    'cta_text' => 'cta.schedule',
    'cta_link' => '#'
));
?>

<?php get_template_part('template-parts/content/slide-building', null, array(
    'title' => 'Building from the ground up',
    'data' => array(
        array(
            'title' => 'Modernizing legacy systems for seamless integration',
            'image_url' => get_assets_from_path('images/slide-digital1.jpg')
        ),
        array(
            'title' => 'Enhancing business agility with digital innovation',
            'image_url' => get_assets_from_path('images/slide-image-2.jpeg')
        ),
        array(
            'title' => 'Driving operational efficiency and customer engagement ',
            'image_url' => get_assets_from_path('images/slide-digital3.jpg')
        )
    )
)); ?>

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
    'title' => datum_get_translation('digital_whydatum.title'),
    'image_url' => get_assets_from_path('images/digital-whydatum.png'),
    'items' => array(
        array(
            'title' => datum_get_translation('digital_whydatum.items.0.title'),
            'content' => datum_get_translation('digital_whydatum.items.0.content'),
        ),
        array(
            'title' => datum_get_translation('digital_whydatum.items.1.title'),
            'content' => datum_get_translation('digital_whydatum.items.1.content'),
        ),
        array(
            'title' => datum_get_translation('digital_whydatum.items.2.title'),
            'content' => datum_get_translation('digital_whydatum.items.2.content'),
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
            'title' => 'What is digital transformation?',
            'content' => 'Digital transformation is the integration of digital technologies into all areas of a business, improving processes, customer experiences, and operational efficiency. It enables organizations to stay competitive, agile, and data-driven in an evolving digital landscape.',
        ),
        array(
            'title' => 'How can digital transformation improve business efficiency?',
            'content' => 'By automating workflows, enhancing data accessibility, and enabling real-time insights, digital transformation helps businesses reduce costs, improve productivity, and streamline operations. It also fosters innovation and enhances decision-making through AI and analytics.',
        ),
        array(
            'title' => 'What are the key technologies driving digital transformation?',
            'content' => 'Core technologies include cloud computing, AI and machine learning, big data analytics, IoT (Internet of Things), automation, and blockchain. These innovations enable businesses to optimize operations, enhance security, and deliver personalized experiences.',
        ),


        array(
            'title' => 'How do I start my digital transformation journey?',
            'content' => 'Begin by assessing your current technology, identifying key business challenges, and setting clear transformation goals. Adopt cloud-based solutions, implement data-driven strategies, and invest in automation tools to enhance efficiency and scalability.',
        ),
        array(
            'title' => 'How can automation optimize digital transformation efforts?',
            'content' => 'Automation reduces manual tasks, accelerates workflows, and minimizes human error. From robotic process automation (RPA) to AI-driven analytics, automation enhances scalability, speeds up digital adoption, and improves customer interactions.',
        ),
    )
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
