<?php //Template Name: Industry Insurance ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Insurance',
    'breadcrumbs' => array('Industry', 'Insurance'),
    'background_image' => get_assets_from_path('images/Insurance.jpg'),
    'type' => 'image'
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-industry', null, array(
    'title' => 'Driving Innovation and Insight with AI',
    'heading' => 'Datum Consulting enables insurers to leverage Generative AI for operational excellence, optimizing risk assessment, claims processing, customer engagement, and compliance while driving growth through transformative technology solutions.',
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'items' => array(
        array(
            'title' => 'Navigating the Modern Insurance Landscape',
            'content' => 'Traditional insurance operations, often reliant on manual processes and disparate data systems, can lead to inefficiencies, delayed insights, and a reactive approach to customer needs. The demand for a "Modern Insurance Experience" necessitates agile, data-driven solutions that can provide rapid insights, automate complex tasks, and deliver superior customer interactions.
            ',
        ),
        array(
            'title' => 'Our Approach: AI-Powered Solutions for Insurance',
            'content' => 'Datum Consulting transforms insurance operations and customer experiences using advanced, secure, and scalable technology platforms.',
        ),
    ),
    'cta_text' => 'Download the full case study',
    'cta_link' => '#'
));
?>

<?php
get_template_part('template-parts/content/info-section-list-industry', null, array(
    'items' => array(
        array(
            'title' => 'Generative AI for Business Intelligence',
            'content' => '
                <p> Developing AI-powered dashboards and conversational interfaces that enable natural language querying of complex insurance data </p>
                <ul class="list-disc pl-5 my-4">
                    <li><span class="font-bold">Natural Language Processing (NLP):</span> Allowing users (e.g., leadership, strategy, finance teams) to ask questions in natural language (e.g., Vietnamese or bilingual) to retrieve specific data, generate reports, and visualize trends.</li>
                    <li><span class="font-bold">Contextual Understanding:</span> Maintaining conversation context to provide seamless and relevant follow-up responses.</li>
                    <li><span class="font-bold">Automated Report Summarization & Charting:</span> Automatically generating concise summaries and visual charts (bar, pie, line) from large datasets, aiding in quick and accurate decision-making.</li>
                </ul>',
        ),      
        array(
            'title' => 'Robust Data Platform Engineering',
            'content' => 'Datum Consulting designs secure, scalable data platforms, integrating data warehousing and vector databases to efficiently process, analyze, and protect vast insurance datasets for evolving business needs.',
        ),
        array(
            'title' => 'Advanced Analytics & Prediction',
            'content' => 'Implementing AI models capable of predictive analysis (e.g., revenue growth, claims risk) and anomaly detection to identify unusual trends in claims or revenue.',
        ),
        array(
            'title' => 'Secure Cloud Infrastructure',
            'content' => 'Leveraging AWS Bedrock and AWS OpenSearch to create highly secure, compliant, and scalable cloud environments for AI and data operations, ensuring data privacy and integrity.',
        ),
        array(
            'title' => 'Role-Based Access Control (RBAC)',
            'content' => 'Designing and implementing granular access controls to ensure that sensitive insurance data and specific features are only accessible to authorized personnel based on their roles.',
        ),
        array(
            'title' => 'Seamless Integration',
            'content' => 'Expertise in integrating new AI and data solutions with existing insurance systems, ensuring continuity and enhancing overall technological capabilities.',
        ),
    ),
)) ;
?>

<?php
get_template_part('template-parts/content/leader-ship', null, array(
    'title' => 'Thought Leadership',
    'heading' => 'Navigating the Era of Generative AI in Banking',
    'image_url' => get_assets_from_path('images/leader.png'),
    'content' => 'Generative AI is revolutionizing banking, unlocking new potential in service, efficiency, fraud detection, and personalization. Datum Consulting is leading this shift, investing in expert teams with deep knowledge in AI, data security, and platform engineering. We go beyond technology, staying attuned to evolving business and regulatory landscapes—to deliver AI solutions that are not only cutting-edge, but secure, responsible, and strategically aligned with the future of banking.',
)) ;
?>

<?php
get_template_part('template-parts/content/driving-tangible-impact', null, array(
    'title' => 'Driving Tangible Impact',
    'heading' => 'Our partnerships with banking clients have consistently yielded significant outcomes, demonstrating our commitment to impactful solutions:',
    'image_url' => get_assets_from_path('images/Group 35.jpg'),
    'items' => array(
        array(
           'content' => 'Enhanced Data Accessibility: Enabling leadership and management to rapidly access and analyze critical business data through intuitive, conversational interfaces.',
        ),
        array(
           'content' => 'Accelerated Decision-Making: Providing quick, accurate insights and automated reports, reducing response times for complex queries.'
        ),
        array(
           'content' => 'Improved Operational Efficiency: Automating data retrieval and report generation, freeing up resources for more strategic tasks.'
        ),
        array(
           'content' => 'Strengthened Compliance & Security: Implementing robust security measures and RBAC to protect sensitive financial data and ensure adherence to industry regulations.'
        ),  
        array(
           'content' => 'Scalability for Future Growth: Designing solutions that can scale to accommodate growing data volumes and evolving business needs.'
        ),       
    )
)) ;
?>

<div class="container my-[44px] lg:my-[100px]">
    <h2 class="font-bold lg:text-[40px] ">
        Successful Stories in Insurance
    </h2>
    <p class="lg:py-[100px] lg:text-[20px] lg:w-[785px]"> Our expertise is best demonstrated through our proven track record. We've successfully guided leading insurance companies through complex data and AI transformations:</p>
    <div class="flex flex-col lg:flex-row  justify-between">
        <div class="w-full  flex flex-col justify-center bg-white pt-6 lg:pt-0  lg:pr-[60px] ">
            <div class="font-bold text-[20px] lg:text-[24px] mb-6 lg:mb-[10px] text-[#315CD4]">
                <h2>
                    GenAI Sales Dashboard POC for a Leading Insurance Company in Vietnam
                </h2>
            </div>
            <div class="leading-[170%] lg:pb-[20px]">
                <div class="py-3 flex flex-col lg:flex-row lg:space-x-5">
                    <div class="w-full text-[16px] lg:text-[20px]">
                        The solution enabled executives and managers to access real-time sales data through a user-friendly conversational interface, automatically generating summaries and charts for improved decision-making. It achieved a high accuracy rate,<span class="font-bold"> resolving 95% of queries within 30 seconds, with a target of 15 seconds for most queries while allowing longer resolution times for complex ones.<span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex items-end justify-center mt-8 lg:mt-0 ">
            <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo get_assets_from_path('images/image 26.png'); ?>" alt="" />
        </div>
    </div>
</div>



<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>