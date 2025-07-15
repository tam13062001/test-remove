<?php
$title = $attributes['title'] ?? 'join_revolution.title';
$description = $attributes['description'] ?? 'join_revolution.description';
$bg_image = $attributes['bg_image'] ?? 'images/why_datum_bg.png';
$cta_link = $attributes['cta_link'] ?? '/contact/';
$cta_text = $attributes['cta_text'] ?? 'cta.schedule';
?>

<div class="relative lg:py-[150px]">
    <!-- Background Images -->
    <div class="absolute top-1/2 left-0 max-h-[450px] -translate-y-1/2">
        <img class="h-[200px] lg:h-[450px]" src="<?php echo get_assets_from_path($bg_image); ?>"
             alt="<?php echo datum_get_translation($title); ?>">
    </div>
    <div class="absolute top-1/2 right-0 max-h-[450px] -translate-y-1/2 rotate-180">
        <img class="h-[200px] lg:h-[450px]" src="<?php echo get_assets_from_path($bg_image); ?>"
             alt="<?php echo datum_get_translation($title); ?>">
    </div>

    <!-- Content -->
    <div class="relative pt-[60px] lg:pt-[100px]">
        <div class="text-center">
            <h1 class="lg:w-[570px] w-[290px] text-[32px] lg:text-[36px] font-bold text-primary mb-8 px-[20px] lg:px-0 mx-auto text-center">
                <?php echo datum_translate($title); ?>
            </h1>

            <p class="lg:w-[550px] w-[290px] lg:text-[20px] text-[16px] mb-12 lg:max-w-3xl mx-auto text-center">
                <?php echo datum_translate($description); ?>
            </p>

            <a class="btn hover:bg-secondary lg:px-6 px-4 font-bold transition-colors" href="<?php echo esc_url($cta_link); ?>">
                <?php echo datum_get_translation($cta_text); ?>
            </a>
        </div>
    </div>
</div>
