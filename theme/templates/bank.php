<?php //Template Name: Industry bank ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.Banking.title',
    'breadcrumbs' => array('breadcrumbs.industry', 'breadcrumbs.banking'),
    'background_image' => get_assets_from_path('images/IndustryBanking.jpg'),
    'type' => 'image'
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-industry', null, array(
    'title' => 'industry_banking.title',
    'heading' => 'industry_banking.heading',
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'items' => array(
        array(
            'title' => 'industry_banking.items.0.title',
            'content' => 'industry_banking.items.0.content',
        ),
        array(
            'title' => 'industry_banking.items.1.title',
            'content' => 'industry_banking.items.1.content',
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
    'title' => 'leadership_section.title',
    'heading' => 'leadership_section.heading_banking',
    'image_url' => get_assets_from_path('images/leader.png'),
    'content' => "leadership_section.content_banking",
)) ;
?>

<div class="pb-[40px] lg:pb-0">
<?php
get_template_part('template-parts/content/driving-tangible-impact', null, array(
    'title' => 'impact_section_banking.title',
    'heading' => 'impact_section_banking.heading',
    'image_url' => get_assets_from_path('images/Group 35.jpg'),
    'items' => array(
        array(
           'title' => 'impact_section_banking.items.0.title',
           'content' => 'impact_section_banking.items.0.content',
        ), 
        array(
           'title' => 'impact_section_banking.items.1.title',
           'content' => 'impact_section_banking.items.1.content',
        ),   
        array(
           'title' => 'impact_section_banking.items.2.title',
           'content' => 'impact_section_banking.items.2.content',
        ),   
        array(
           'title' => 'impact_section_banking.items.3.title',
           'content' => 'impact_section_banking.items.3.content',
        ),   
        array(
           'title' => 'impact_section_banking.items.4.title',
           'content' => 'impact_section_banking.items.4.content',
        ),           
    )
)) ;
?>
</div>


<div class="container lg:py-[100px]">
    <img class="w-full" src="<?php echo  get_assets_from_path('images/Banking-image.png'); ?>" />
    
<div> 
    <h2 class="lg:py-[100px] py-[40px] text-[24px] font-bold">
        <?= datum_translate('strategic_coverage.title'); ?>
    </h2>
    <p class="lg:text-[20px] leading-[170%] lg:w-[785px] text-[16px] font-regular">
        <?= datum_translate('strategic_coverage.content'); ?>
    </p>
</div>
</div>

<?php get_template_part('template-parts/content/successful-stories-banking', null, array(
    'title' => 'banking_stories.title',
    'title_1' => 'banking_stories.story_1',
    'title_2' => 'banking_stories.story_2',
)); ?>


<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>