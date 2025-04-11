<?php /* Template Name: About Datum Template */ ?>

<?php get_header(); ?>

<!-- <div class="h-[603px] relative">
    <img class="object-cover h-full w-full"
        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/datum-about-slide.jpg'  ?>" />
    <div class="absolute top-1/2 -translate-y-1/2 z-10 font-[700] text-white text-[40px] leading-[120%]">
        <div>About Datum</div>
    </div>
</div> -->

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'About Datum',
    'background_image' => get_assets_from_path('images/datum-about-slide.jpg')
)); ?>

<!-- second section -->
<div class=" pb-[146px]">
    <div class="container">
        <div class="flex pt-[60px] lg:pt-[93px] lg:w-[723px]">
            <div class="text-[24px] lg:text-[36px] font-normal lg:leading-[170%] text-black">
                <div>
                    At Datum, we are more than just a technology consultancy—we are your strategic partner in digital
                    transformation.
                </div>
            </div>
        </div>

        <div class="flex pt-6 lg:pt-[93px] lg:w-[785px]">
            <div class="text-[16px] lg:text-[20px] font-normal leading-[170%] text-black tracking-[-0.2px]">
                <div>
                    <p class="mb-8">
                        We specialize in cloud engineering, data and AI, platform engineering, and software integration,
                        helping
                        businesses scale, optimize, and secure their technology landscape.
                    </p>
                    <p>
                        With deep expertise across banking, finance, energy, consumer goods, and digital enterprises, we
                        deliver
                        tailored, high-impact solutions that drive efficiency, innovation, and competitive advantage.
                    </p>
                </div>
            </div>
        </div>

    </div>
    

    
</div>

    <div class="container flex pt-[60px] lg:pt-[126px] w-full">
        <div class="text-[32px] lg:text-[40px] font-[700] text-black tracking-[-0.4px]">
            <div>
                We help businesses unlock the full<br>potential of their technology<br>investments through:
            </div>
        </div>
    </div>

    <?php
    get_template_part('template-parts/content/info-section-list-about', null, array(
        'title' => '',
        'items' => array(
            array(
                'title' => 'Data &amp; AI',
                'content' => 'Datum enables businesses to harness the power of the cloud and data for enhanced decision-making and operational efficiency. From cloud migration to data lakehouse implementation, we help clients scale their infrastructure and unlock valuable insights from their data.',
            ),
            array(
                'title' => 'Platform Engineering',
                'content' => 'DatumConsulting ensures that your technology is both secure and compliant with industry regulations. From secure data encryption to DevSecOps, we embed security into every stage of the development and operational process.',
            ),
            array(
                'title' => 'System & Data Integration',
                'content' => 'Our integration services ensure that disparate systems across your organization work together seamlessly. Datum excels in legacy system integration, cloud migration, and secure data sharing mechanisms that enhance business agility and collaboration.',
            ),
        ),
    )) ;
    ?>
    <div class=" mt-[-100px] pb-[146px]" ></div>

<!-- We dont just -->
<?php
get_template_part('template-parts/content/about-we-dont-just', null, array(
    'title' => 'We don’t just deploy technology,<br>we solve business challenges with:',
    'image_url' => get_assets_from_path('images/Group 34.jpg'),
    'items' => array(
        array(
            'title' => 'Industry Expertise',
            'content' => 'Decades of experience in banking, finance, energy, and consumer technology.',
        ),
        array(
            'title' => 'Customized Solutions',
            'content' => 'Technology tailored to your business goals, industry requirements, and regulatory landscape.',
        ),
        array(
            'title' => 'Proven Track Record',
            'content' => '99.9% uptime for critical banking applications, zero-downtime deployments, and long-term partnerships.',
        ),
        array(
            'title' => 'End-to-End Support',
            'content' => 'From strategy to execution and continuous optimization, we ensure maximum ROI on every project.',
        )
       
    )
)) ;
?>


<!-- Our Values -->
<!-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script> -->

<?php
get_template_part('template-parts/content/our-values', null, array(
    'title' => 'Our Values',
    'image_url' => get_assets_from_path('images/our_values.jpg'),
    'items' => array(
        array(
            'title' => 'Strategic Excellence',
            'content_text' => 'We anticipate challenges before they arise. Our technology solutions align with your business strategy, providing a clear roadmap for long-term success.',
        ),
        array(
            'title' => 'Speed with Precision',
            'content_text' => 'Time-to-value matters. Whether modernizing systems or deploying AI, we accelerate outcomes with surgical precision, minimizing risk while maximizing ROI.',
        ),
        array(
            'title' => 'Client Centric Approach',
            'content_text' => 'You’re the hero of your transformation story. We listen first, act second, and co-create solutions that align with your unique goals, culture, and challenges.
',
        ),
        array(
            'title' => 'Global Mindset Local Expertise',
            'content_text' => 'Your local challenges meet our global perspective. We design solutions that respect regional nuances while harnessing best practices from industries worldwide.
',
        )
       
    )
)) ;
?>


<!-- Our Teams -->
<?php
get_template_part('template-parts/content/our-teams', null, array(
    'title' => 'Our Team',
    'members' => array(
        array(
            'name' => 'Nghia Nguyen',
            'title' => 'Co-founder',
            'image_url' => get_assets_from_path('images/our_team_1.jpg'),
        ),
        array(
            'name' => 'Nick Do',
            'title' => 'Co-founder',
            'image_url' => get_assets_from_path('images/our_team_2.jpg'),
        ),
        array(
            'name' => 'Thang Nguyen',
            'title' => 'CIO – Chief of Information Officer',
            'image_url' => get_assets_from_path('images/our_team_3.jpg'),
        )
    ),
    'summembers' => array(
        array(
            'number' => '30+',
            'description' => 'Solution Architects & Technical Leads',
        ),
        array(
            'number' => '120+',
            'description' => 'Cloud, AI, DevOps, and Software Engineering Specialists',
        )
    )
)) ;
?>



<!-- Our Partners -->
<?php get_template_part('template-parts/content/partners'); ?>

<!-- Location -->
<?php get_template_part('template-parts/content/location'); ?>


<?php get_footer(); ?>