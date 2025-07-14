<?php
$title = $attributes['title'] ?? 'our_story.title';
$content = $attributes['content'] ?? 'our_story.content';
$cta_text = $attributes['cta_text'] ?? 'our_story.cta';
$image_url = $attributes['image_url'] ?? get_assets_from_path('images/img_6.png');
$cta_link = $attributes['cta_link'] ?? '/about-datum';
?>

<div class="relative lg:py-[100px] w-full lg:mb-[150px]">
    <div class="lg:h-[680px]">
        <img class="object-cover h-full w-full object-center" src="<?php echo esc_url($image_url); ?>" alt="Success Stories" />
    </div>

    <div class="lg:absolute w-full mx-auto bottom-0">
        <div class="container py-[60px] lg:py-0">
            <div class="bg-white lg:w-[787px] lg:px-[123px] lg:py-[70px] lg:shadow-lg">
                <h2 class="text-[32px] lg:text-[40px] font-bold mb-8">
                    <?php echo datum_translate($title); ?>
                </h2>
                <div class="lg:leading-10 text-Regular text-base sm:text-lg lg:text-[20px] mb-8">
                    <?php echo datum_translate($content); ?>
                </div>

                <a href="<?php echo esc_url($cta_link); ?>" class="text-primary text-[16px] lg:text-[20px] inline-flex items-center font-mixed md:text-lg">
                    <?php echo datum_translate($cta_text); ?>
                    <span class="ml-1"><i class="fas fa-chevron-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
