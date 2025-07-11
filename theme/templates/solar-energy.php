<?php //Template Name: Industry Solar Energy ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'banner.SolarEnergy.title',
    'breadcrumbs' => array('breadcrumbs.industry', 'breadcrumbs.solar_energy'),
    'background_image' => get_assets_from_path('images/Solar Energy.jpg'),
    'type' => 'image'
)); ?>

<?php
get_template_part('template-parts/content/call-to-action-industry', null, array(
    'title' => 'industry_solar.title',
    'heading' => 'industry_solar.heading',
    'image_url' => get_assets_from_path('images/Group 62.png'),
    'items' => array(
        array(
            'title' => 'industry_solar.items.0.title',
            'content' => 'industry_solar.items.0.content',
        ),
        array(
            'title' => 'industry_solar.items.1.title',
            'content' => 'industry_solar.items.1.content',
        ),
    ),
    'cta_text' => 'Download the full case study',
    'cta_link' => '#'
));
?>

<div class="lg:py-[40px]">
  <div class="container pb-[40px] lg:pb-[100px]">
  
    <div>
      <h2 class="text-[20px] font-bold text-[#315CD4] pb-[50px]">
       Our Intergration approach
      </h2>
    </div>

    
    <div class="lg:flex grid grid-cols-1 justify-between gap-4 ">
        
        <div class="h-full w-full grid grid-cols-1 gap-4 ">
            <div class=" w-full overflow-hidden group flex flex-col h-auto lg:min-h-[320px] min-h-[280px]">
                <div class="inset-0 bg-[#315CD4] lg:py-14 py-8 lg:px-0 px-6 flex flex-col text-white h-full">
                    <h3 class="lg:px-16 px-0 text-[16px] lg:text-[20px] font-semibold leading-[170%]">
                    Cloud-Based Machine Learning Platforms
                    </h3>
                    
                    <p class="lg:px-16 px-0 text-[13px] lg:text-[20px] mt-2 leading-[170%]">
                        Design robust machine-learning platforms using AWS for scalable analytics and real-time decision-making in solar energy.
                    </p>
                
                </div>
            
            </div>

            <div class="w-full overflow-hidden group flex flex-col h-auto lg:min-h-[320px] min-h-[280px]">
                <div class="inset-0 bg-[#315CD4] lg:py-14 py-8 lg:px-0 px-6 flex flex-col text-white h-full">
                    <h3 class="lg:px-16 px-0 text-[16px] lg:text-[20px] font-semibold leading-[170%]">
                    Scenario Simulation and Market Intelligence
                    </h3>
                    
                    <p class="lg:px-16 px-0 text-[13px] lg:text-[20px] mt-2 leading-[170%]">
                        Developing intuitive tools that allow users to run various scenarios of selling and storing solar energy.
                    </p>
                
                </div>
            
            </div>
        </div>
      
        
        <div class="h-full w-full grid grid-cols-1 gap-4 ">
            <div class="h-full w-full overflow-hidden group flex flex-col ">
                <div class="inset-0 bg-[#315CD4] lg:py-14 py-8 lg:px-0 px-6 flex flex-col text-white h-full">
                        <h3 class="lg:px-16 px-0 text-[16px] lg:text-[20px] font-semibold leading-[170%]">
                            Big Data Optimization &  Predictive Analytics
                        </h3>
                    
                        <ul class="lg:px-16 px-0 text-[13px] lg:text-[20px] mt-2 leading-[170%]">
                            <li class="relative lg:pl-4"><span class="w-[18px] ">•</span> Battery Usage Optimization: Intelligent algorithms optimize charging and discharging cycles to enhance efficiency and longevity, adapting to grid stability and environmental factors.</li>
                            <li class="relative lg:pl-4"><span class="w-[18px] ">•</span> Grid Electricity Provision: Advanced strategies determine optimal energy provision to the grid, factoring in demand, transmission constraints, and weather variations.</li>
                            <li class="relative lg:pl-4"><span class="w-[18px] ">•</span> Price Maximization: Data-driven models forecast market prices to optimize solar energy sales, ensuring regulatory compliance and maximizing revenue.</li>
                        </ul>
                </div>
            </div>


        </div>

        
      
    </div>
  </div>
</div>


<div class="container lg:pb-[100px] pb-[40px] ">
    <img class="w-full" src="<?php echo  get_assets_from_path('images/Solar Energy-img.png'); ?>" />
</div>


<?php
get_template_part('template-parts/content/driving-tangible-impact', null, array(
    'title' => 'impact_section_energy.title',
    'heading' => 'impact_section_energy.heading',
    'image_url' => get_assets_from_path('images/Group 35.jpg'),
    'items' => array(
        array(
           'title' => 'impact_section_energy.items.0.title',
           'content' => 'impact_section_energy.items.0.content',
        ), 
        array(
           'title' => 'impact_section_energy.items.1.title',
           'content' => 'impact_section_energy.items.1.content',
        ),   
        array(
           'title' => 'impact_section_energy.items.2.title',
           'content' => 'impact_section_energy.items.2.content',
        ),   
        array(
           'title' => 'impact_section_energy.items.3.title',
           'content' => 'impact_section_energy.items.3.content',
        ),         
    )
)) ;
?>





<div class="container my-[40px] lg:my-[100px]">

    <div class="flex flex-col lg:flex-row  justify-between">
        <div class="w-full flex items-end justify-center mt-8 lg:mt-0 ">
            <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo get_assets_from_path('images/image 25.png'); ?>" alt="" />
        </div>

        <div class="w-full  flex flex-col justify-center bg-white lg:gap-y-[30px] pt-6 lg:pt-0  lg:pl-[160px] ">
            <div class="font-bold text-[20px] lg:text-[24px] mb-6 lg:mb-[10px] text-[#000000]">
                <h2>
                    <?php echo datum_translate('solar_commitment.title'); ?>
                </h2>
            </div>
            <div class="leading-[170%] lg:pb-[20px]">
                <div class="py-3 flex flex-col lg:flex-row lg:space-x-5">
                    <div class="lg:w-[82%] w-full text-[16px] lg:text-[20px]">
                        <?php echo datum_translate('solar_commitment.content'); ?>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>

<div class="container my-[44px] lg:my-[160px]">
    <h2 class="font-bold lg:text-[40px] text-[24px] ">
        <?php echo datum_translate('solar_success.title'); ?>
    </h2>
    <div class="py-[24px] lg:py-0">
<p class="lg:py-[80px] lg:text-[20px] text-[16px] py-[18px] lg:py-0"> <?php echo datum_translate('solar_success.intro'); ?></p>
    </div>
    
    <div class="flex flex-col lg:flex-row  justify-between">
        <div class="w-full  flex flex-col justify-center bg-white pt-6 lg:pt-0  lg:pr-[60px] ">
            <div class="font-bold text-[20px] lg:text-[24px] mb-6 lg:mb-[10px] text-[#315CD4]">
                <h2>
                    <?php echo datum_translate('solar_success.case_study.title'); ?>
                </h2>
            </div>
            <div class="leading-[170%] lg:pb-[20px]">
                <div class="py-3 flex flex-col lg:flex-row lg:space-x-5">
                    <div class="lg:w-[82%] w-full text-[16px] lg:text-[20px]">
                        <?php echo datum_translate('solar_success.case_study.content'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex items-end justify-center mt-8 lg:mt-0 ">
            <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo get_assets_from_path('images/image 24.png'); ?>" alt="" />
        </div>
    </div>
</div>


<div class="container lg:pb-[50px] lg:pt-[24px]">  
    <div> 
        <p class="lg:text-[20px] text-[16px] leading-[170%] lg:w-[785px] font-bold">
            <?php echo datum_translate('solar_footer.content'); ?>
        </p>
    </div>
</div>

<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>