<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>

<!-- Hero Section -->
<div class="h-[670px] w-full sm:h-[550px] lg:h-[670px] xl:h-[824px] relative">
    <!-- Mobile: Fixed 390x670, Desktop: Cover full container -->
    <img 
        class="w-full h-full object-cover sm:object-cover sm:w-[390px] sm:h-[670px]" 
        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/1.png' ?>" 
        alt="Hero Background"

    />
    <div class="absolute inset-0 flex items-end lg:items-center z-10 px-4 pb-8 lg:pb-0">
        <div class="container mx-auto">
            <h1 class="font-bold text-white text-3xl sm:text-4xl xl:text-[72px] leading-[120%] space-y-9 sm:space-y-4 line">
                <div class="ml-0 sm:ml-0 md:ml-0 lg:ml-0">Pioneering</div>
                <div class="ml-8 sm:ml-12 md:ml-24 lg:ml-36">the Future of</div>
                <div class="ml-4 sm:ml-6 md:ml-8 lg:ml-12">Digital Innovation</div>
            </h1>
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
<div class="container py-[60px] lg:py-[100px]">
    <h1 class="text-[32px] lg:text-[40px] font-bold mb-10 lg:mb-16">
        What Sets Us Apart
    </h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 xl:gap-12">
        <!-- Data & AI Card -->
        <div class="bg-white rounded-lg relative h-[346px] lg:h-[520px]">
            <video
                class="w-full h-full object-cover absolute top-0 left-0"
                autoplay
                muted
                loop
            >
                <source src="<?php echo get_assets_from_path('videos/homepage_data_ai.mp4') ?>" type="video/mp4">
            </video>
            <div class="text-white relative p-10 flex flex-col justify-between h-full">
                <h2 class="text-2xl font-bold mb-4 mt-4">Data & AI</h2>
                <p>
                    Harness AI insights to turn raw data into smart strategies for better decision-making.
                </p>
            </div>
        </div>

        <div class="bg-white rounded-lg relative h-[346px] lg:h-[520px]">
            <img
                    class="w-full h-full object-cover absolute top-0 left-0 brightness-50"
                    src="<?php echo get_assets_from_path('images/img_3.png') ?>"
            />
            <div class="text-white relative p-10 flex flex-col justify-between h-full">
                <h2 class="text-2xl font-bold mb-4 mt-4">Cloud Solutions</h2>
                <p>
                    Create a robust cloud ecosystem designed for your needs, optimizing security and efficiency.
                </p>
            </div>
        </div>
        <div class="bg-white rounded-lg relative h-[346px] lg:h-[520px]">
            <video
                    class="w-full h-full object-cover absolute top-0 left-0"
                    autoplay
                    muted
                    loop
            >
                <source src="<?php echo get_assets_from_path('videos/homepage_software_engineering.mp4') ?>" type="video/mp4">
            </video>
            <div class="text-white relative p-10 flex flex-col justify-between h-full">
                <h2 class="text-2xl font-bold mb-4 mt-4">Software Engineering</h2>
                <p>
                    Boost your business with tailored software solutions that drive growth.
                </p>
            </div>
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
<!-- successful-stories -->
<?php get_template_part('template-parts/content/hp-successful-stories'); ?>
<!-- Our Story -->
<?php get_template_part('template-parts/content/our-story'); ?>

<!-- Our Partners -->
<?php get_template_part('template-parts/content/partners'); ?>

<!-- Join the Digital Revolution -->
<div class="relative">
    <div class="absolute top-1/2 left-0 max-h-[450px] -translate-y-1/2">
        <img class="h-[200px] lg:h-[450px]" src="<?php echo get_assets_from_path('images/why_datum_bg.png') ?>" alt="{$title}">
    </div>
    <div class="absolute top-1/2 right-0 max-h-[450px] -translate-y-1/2 rotate-180">
        <img class="h-[200px] lg:h-[450px]" src="<?php echo get_assets_from_path('images/why_datum_bg.png') ?>" alt="{$title}">
    </div>
    <div class="container py-[100px] lg:py-[200px] mx-auto px-4 xl:px-0">
        <div class="text-center">
            <h1 class="sm:text-[32px] text-4xl font-bold text-primary mb-8 ">
                Join the Digital Revolution
            </h1>

            <p class="text-[20px] sm:text-[16px] font-Regular mb-12 leading-normal max-w-3xl mx-auto text-center">
                Future-proof your business with Datum. Let's build smarter, faster, and more powerful digital solutions together.
            </p>

            <button class="btn hover:bg-[#0DC0E2] lg:text-[16px] text-[14px] font-bold transition-colors">
                Schedule a consultation with our expert
            </button>
        </div>
    </div>
</div>

<!-- Location -->
<?php get_template_part('template-parts/content/location'); ?>

<?php get_footer(); ?>