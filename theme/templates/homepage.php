<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>

    <!-- Hero Section -->
    <div class="h-[670px] w-full lg:h-[824px] relative">
        <!-- Mobile: Fixed 390x670, Desktop: Cover full container -->
        <img class="w-full h-full object-cover sm:object-cover"
             src="<?php echo get_stylesheet_directory_uri() . '/assets/images/BG 1.jpg' ?>" alt="Hero Background" />
        <div class="absolute inset-0 flex items-end lg:items-center z-10 pb-8 lg:pb-0">
            <div class="container mx-auto">
                <h1 class="font-bold text-white text-[32px] lg:text-[72px] lg:leading-[120%]">
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
        <h1 class="text-[32px] lg:text-[40px] font-[600] mb-10 lg:mb-16">
            What Sets Us Apart
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 xl:gap-12">
            <!-- Data & AI Card -->
            <?php $items = array(
                array(
                    'title' => 'Data & AI',
                    'content' => 'Harness AI insights to turn raw data into smart strategies for better decision-making.',
                    'media_url' => get_assets_from_path('videos/homepage_data_ai.mp4'),
                    'media_type' => 'video',
                ),
                array(
                    'title' => 'Cloud Solutions',
                    'content' => 'Create a robust cloud ecosystem designed for your needs, optimizing security and efficiency.',
                    'media_url' => get_assets_from_path('images/img_3.png'),
                    'media_type' => 'image',
                ),
                array(
                    'title' => 'Software Engineering',
                    'content' => 'Boost your business with tailored software solutions that drive growth.',
                    'media_url' => get_assets_from_path('videos/homepage_software_engineering.mp4'),
                    'media_type' => 'video',
                )
            ) ?>
            <?php foreach ($items as $item): ?>
            <div class="bg-white rounded-lg relative h-[346px] lg:h-[520px]">
                <?php if ($item['media_type'] === 'video'): ?>
                    <video class="w-full h-full object-cover absolute top-0 left-0" autoplay muted loop>
                        <source src="<?php echo $item['media_url'] ?>" type="video/mp4">
                    </video>
                <?php else: ?>
                    <img class="w-full h-full object-cover absolute top-0 left-0 brightness-50" src="<?php echo $item['media_url'] ?>" />
                <?php endif; ?>
                <div class="text-white relative p-10 flex flex-col justify-between h-full">
                    <h2 class="text-2xl font-[500] mb-4 mt-4"><?php echo $item['title'] ?></h2>
                    <p class="font-[200] min-h-[160px]">
                        <?php echo $item['content'] ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
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
            <img class="h-[200px] lg:h-[450px]" src="<?php echo get_assets_from_path('images/why_datum_bg.png') ?>"
                 alt="{$title}">
        </div>
        <div class="absolute top-1/2 right-0 max-h-[450px] -translate-y-1/2 rotate-180">
            <img class="h-[200px] lg:h-[450px]" src="<?php echo get_assets_from_path('images/why_datum_bg.png') ?>"
                 alt="{$title}">
        </div>
        <div class="container py-[100px] lg:py-[100px] mx-auto px-4 xl:px-0">
            <div class="text-center">
                <h1 class="sm:text-[32px] text-4xl font-bold text-primary mb-8 ">
                    Join the Digital Revolution
                </h1>

                <p class="text-[20px] sm:text-[16px] font-Regular mb-12 leading-normal lg:max-w-3xl mx-auto text-center">
                    Future-proof your business with Datum. Let's build smarter, faster, and more powerful digital solutions
                    together.
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