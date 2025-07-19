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
  'title' => 'solution_industry.Banking.title',
  'items' => [
    [
      'title' => datum_translate('solution_industry.Banking.items.0.title'),
      'description' =>datum_translate('solution_industry.Banking.items.0.content'),
    ],
    [
      'title' => datum_translate('solution_industry.Banking.items.1.title'),
      'description' =>datum_translate('solution_industry.Banking.items.1.content'),
    ],
    [
      'title' => datum_translate('solution_industry.Banking.items.2.title'),
      'description' =>datum_translate('solution_industry.Banking.items.2.content'),
    ],
    [
      'title' => datum_translate('solution_industry.Banking.items.3.title'),
      'description' =>datum_translate('solution_industry.Banking.items.3.content'),
    ],
    [
      'title' => datum_translate('solution_industry.Banking.items.4.title'),
      'description' =>datum_translate('solution_industry.Banking.items.4.content'),
    ],
    [
      'title' => datum_translate('solution_industry.Banking.items.5.title'),
      'description' =>datum_translate('solution_industry.Banking.items.5.content'),
    ],
]

)); ?>

<?php
get_template_part('template-parts/content/leader-ship', null, array(
    'title' => 'leadership_section.title_bank',
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