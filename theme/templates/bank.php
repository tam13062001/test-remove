<?php //Template Name: Industry bank ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Banking',
    'breadcrumbs' => array('Industry', 'Banking'),
    'background_image' => get_assets_from_path('images/IndustryBanking.jpg'),
    'type' => 'image'
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-industry', null, array(
    'title' => 'Powering the Future of Finance',
    'heading' => 'Banks today face mounting challenges—from regulations and security threats to digital and operational demands. At Datum Consulting, we use our tech expertise to help them innovate, stay secure, and grow.',
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'items' => array(
        array(
            'title' => 'Navigating the Modern Banking Environment',
            'content' => 'Outdated banking infrastructure brings security risks, governance issues, and sluggish digital growth. To deliver a modern banking experience, institutions need scalable, compliant tech that enables microservices, faster rollouts, and better customer satisfaction.',
        ),
        array(
            'title' => 'Our Approach: Secure, Scalable, and Agile Banking Solutions',
            'content' => 'Datum Consulting helps top financial institutions modernize their IT infrastructure with secure, automated platforms built for banking’s unique needs.',
        ),
    ),
    'cta_text' => 'Download the full case study',
    'cta_link' => '#'
));
?>

<?php get_template_part('template-parts/content/specialize',null ,array(
    'items' => [
  [
    'title' => 'Secure Cloud Adoption',
    'description' => 'Implementing advanced cloud environments like AWS Landing Zones to establish secure, compliant, and well-governed foundations for your digital assets.',
  ],
  [
    'title' => 'Automated Operations',
    'description' => 'Developing automated CI/CD pipelines for zero-downtime deployments, dramatically accelerating innovation and minimizing disruptions.',
  ],
  [
    'title' => 'Modern Workload Platforms',
    'description' => 'Deploying and customizing robust platforms like Amazon EKS to support diverse workloads, from core banking microservices to front-end applications, ensuring high availability and performance.',
  ],
  [
    'title' => 'API Management & Integration',
    'description' => 'Redefining API strategies and facilitating seamless integration of legacy systems with modern technologies, ensuring continuity and adaptability.',
  ],
  [
    'title' => 'Enhanced Security & Compliance',
    'description' => 'Implementing stringent security measures, including role-based access, least privilege policies, advanced encryption, and integrated monitoring tools to meet strict regulatory standards.',
  ],
  [
    'title' => 'Financial Technology Integration',
    'description' => 'Our AWS-certified experts integrate seamlessly with banking experience platforms like Backbase and core banking systems such as ThoughtMachine and Fineract, ensuring smooth interoperability across your tech ecosystem.',
  ]
]

)); ?>

<?php
get_template_part('template-parts/content/leader-ship', null, array(
    'title' => 'Thought Leadership',
    'heading' => 'Navigating the Era of Generative AI in Banking',
    'image_url' => get_assets_from_path('images/leader.png'),
    'content' => 'Generative AI is revolutionizing banking, unlocking new potential in service, efficiency, fraud detection, and personalization. Datum Consulting is leading this shift, investing in expert teams with deep knowledge in AI, data security, and platform engineering. We go beyond technology, staying attuned to evolving business and regulatory landscapes—to deliver AI solutions that are not only cutting-edge, but secure, responsible, and strategically aligned with the future of banking.',
)) ;
?>

<div class="pb-[40px] lg:pb-0">
<?php
get_template_part('template-parts/content/driving-tangible-impact', null, array(
    'title' => 'Driving Tangible Impact',
    'heading' => 'Our partnerships with banking clients have consistently yielded significant outcomes, demonstrating our commitment to impactful solutions:',
    'image_url' => get_assets_from_path('images/Group 35.jpg'),
    'items' => array(
        array(
           'content' => 'Strengthened Security & Compliance: Elimination of vulnerabilities and full alignment with banking regulations, reinforcing trust and operational integrity.',
        ),
        array(
           'content' => 'Accelerated Innovation: Faster feature rollouts and enhanced agility through automated pipelines.'
        ),
        array(
           'content' => 'Optimized Infrastructure: Streamlined workload management and efficient migration of on-premise applications, supporting initiatives like front-end modernization.'
        ),
        array(
           'content' => 'Sustained Growth: Achieving remarkable platform uptime (e.g., 99.9%) and optimizing resource utilization to position banks for continuous success.'
        ), 
        array(
           'content' => 'Scalability for New Products: Enabling the seamless integration and support for new banking products and services.'
        ),        
    )
)) ;
?>
</div>


<div class="container lg:py-[100px]">
    <img class="w-full" src="<?php echo  get_assets_from_path('images/Banking-image.png'); ?>" />
    
    <div> 
        <h2 class="lg:py-[100px] py-[40px] text-[24px] font-bold"> Strategic Coverage and Local Expertise</h2>
        <p class="lg:text-[20px] leading-[170%] lg:w-[785px] text-[16px] font-regular">With strategic APAC coverage, Datum Consulting merges global expertise and local insight to craft cutting-edge, compliant solutions. Our diverse teams understand regional nuances, ensuring every banking initiative aligns with local regulations and cultural context—delivering truly relevant, high-impact results for our clients across the Asia-Pacific landscape. </p>
    </div>
</div>

<?php get_template_part('template-parts/content/successful-stories-banking',null,array(
    'title' => 'Success Stories in Banking',
    'title_1' => 'Customizing a secure Amazon EKS workload platform for a Prestigious Banking Partner',
    'title_2' => 'Redefining Banking Excellence: A Secure Landing Zone Transformation',
)); ?>




<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>