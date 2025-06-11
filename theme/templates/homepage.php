<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/bannerHomePage') ?>

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
    <div class="container py-[60px] lg:py-70px]">
        <h1 class="text-[32px] lg:text-[40px] font-bold mb-8 lg:mb-[60px]">
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
                    'media_url' => get_assets_from_path('videos/cloud_banner_video.mp4'),
                    'media_type' => 'video',
                ),
                array(
                    'title' => 'Software Engineering',
                    'content' => 'Boost your business with tailored software solutions that drive growth.',
                    'media_url' => get_assets_from_path('videos/software_banner_video.mp4'),
                    'media_type' => 'video',
                )
            ) ?>
            <?php foreach ($items as $item): ?>
            <div class="bg-white rounded-lg relative h-[346px] lg:h-[520px]">
                <?php if ($item['media_type'] === 'video'): ?>
                    <video class="w-full h-full object-cover absolute top-0 left-0" autoplay muted loop playsinline>
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

<?php get_template_part('template-parts/content/Join-the-Digital-Revolution'); ?>

    <!-- Location -->
<?php get_template_part('template-parts/content/location'); ?>

<?php get_template_part('template-parts/content/back-to-top'); ?>

<?php get_footer(); ?>