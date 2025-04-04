<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>

<!-- Hero Section -->
<div class="h-[824px] relative">
    <img class="object-cover h-full w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img.png' ?>" alt="Hero Background" />
    <div class="absolute top-1/2 -translate-y-1/2 z-10 font-bold text-white text-4xl xl:text-[72px] leading-[120%] w-full px-4 xl:px-0">
        <div class="container mx-auto">
            <div>Pioneering</div>
            <div>the Future of</div>
            <div class="text-[#0DC0E2]">Digital Innovation</div>
        </div>
    </div>
</div>

<!-- About Section -->
<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'Datum is your trusted partner in digital transformation, seamlessly integrating Cloud Solutions, Software Engineering, and Data & AI to help businesses scale, innovate, and stay ahead.',
    'image_url' => get_assets_from_path('images/img_1.png'),
    'cta_text' => 'Schedule a consultation with our expert',
    'cta_link' => '#'
));
?>

<!-- What Sets Us Apart -->
<div class="container py-[100px] mx-auto px-4 xl:px-0">
    <h1 class="text-4xl xl:text-5xl font-bold text-gray-900 mb-16">
        What Sets Us Apart
    </h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 xl:gap-12">
        <!-- Data & AI Card -->
        <div class="bg-white rounded-lg">
            <img class="w-full h-[224px] object-cover" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_2.png' ?>" alt="Data & AI" />
            <h2 class="text-2xl font-bold mb-4 mt-4 text-[#315CD4]">Data & AI</h2>
            <p class="text-gray-600">
                Unlock the full potential of your data with AI-driven insights. We transform raw data into intelligent strategies, enabling smarter decision-making and competitive advantage.
            </p>
        </div>
        
        <!-- Cloud Solutions Card -->
        <div class="bg-white rounded-lg">
            <img class="w-full h-[224px] object-cover" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_3.png' ?>" alt="Cloud Solutions" />
            <h2 class="text-2xl font-bold mb-4 mt-4 text-[#315CD4]">Cloud Solutions</h2>
            <p class="text-gray-600">
                Build a scalable and resilient cloud ecosystem tailored to your needs. We help businesses optimize their cloud infrastructure, enhance security, and drive operational efficiency.
            </p>
        </div>
        
        <!-- Software Engineering Card -->
        <div class="bg-white rounded-lg">
            <img class="w-full h-[224px] object-cover" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_4.png' ?>" alt="Software Engineering" />
            <h2 class="text-2xl font-bold mb-4 mt-4 text-[#315CD4]">Software Engineering</h2>
            <p class="text-gray-600">
                Elevate your business with future-ready software solutions. From custom application development to enterprise systems, we craft intuitive and powerful software that accelerates growth.
            </p>
        </div>
    </div>
</div>

<!-- Game-Changing Solutions -->
<?php get_template_part('template-parts/content/solutions'); ?>

<!-- Why Datum -->
<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'Why Datum',
    'image_url' => get_assets_from_path('images/image_5.png'),
    'items' => array(
        array(
            'title' => 'Outcome-Driven Innovation ',
            'content' => 'We start with your goals and craft tailored solutions that solve real business challenges. ',
        ),
        array(
            'title' => 'Seamless Collaboration',
            'content' => 'Open, honest, and frequent communication ensures transparency and alignment at every step. ',
        ),
        array(
            'title' => 'Trusted Expertise',
            'content' => 'We deliver IT solutions right the first time, acting as a reliable partner invested in your success.',
        )
    ),
)) ;
?>

<!-- Our Story -->
<?php get_template_part('template-parts/content/our-story'); ?>

<!-- Our Partners -->
<?php get_template_part('template-parts/content/partners'); ?>

<!-- Join the Digital Revolution -->
<div class="container py-[100px] mx-auto px-4 xl:px-0">
    <div class="text-center">
        <h1 class="text-4xl xl:text-5xl font-bold text-[#315CD4] mb-8">
            Join the Digital Revolution
        </h1>
        
        <p class="text-xl text-gray-600 mb-12 leading-normal max-w-3xl mx-auto">
            Future-proof your business with Datum. Let's build smarter, faster, and more powerful digital solutions together.
        </p>

        <button class="bg-[#315CD4] text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-[#0DC0E2] transition-colors">
            Schedule a consultation with our expert
        </button>
    </div>
</div>

<!-- Location -->
<?php get_template_part('template-parts/content/location'); ?>

<?php get_footer(); ?>