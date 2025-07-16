<?php
$lang = $_GET['lang'] ?? 'en';
$title = 'our_story.title';
$content = 'our_story.content';
$cta_text = 'our_story.cta';
?>

<div class="relative lg:py-[100px] w-full lg:mb-[150px]">
    <div class="lg:h-[680px]">
        <img class="object-cover h-full w-full object-center" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_6.png' ?>" alt="Success Stories" />
    </div>

    <div class="lg:absolute w-full mx-auto bottom-0">
        <div class="container py-[60px] lg:py-0">
            <div class="bg-white lg:w-[787px] lg:px-[123px] lg:py-[70px] lg:shadow-lg">
                <h2 class="text-[32px] lg:text-[40px] font-bold mb-8">
                    <?php echo datum_translate($title); ?>
                </h2>
                <div class="lg:leading-10 text-Regular text-base sm:text-lg lg:text-[19px] mb-8">
                    <?php echo datum_translate($content); ?>
                </div>

                <a href="/about-datum" class="text-primary text-[16px] lg:text-[20px] inline-flex items-center font-mixed md:text-lg">
                    <?php echo datum_translate($cta_text); ?>
                    <span class="ml-1"><i class="fas fa-chevron-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
