<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>

<div class="h-[824px] relative">
    <img class="object-cover h-full w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img.png'  ?>" />
    <div class="absolute top-1/2 -translate-y-1/2 z-10 font-[700] text-white text-[72px] leading-[120%]">
        <div class="ml-[128px]">
            <div>Pioneering</div>
            <div class="ml-40">the Future of</div>
            <div class="ml-10">Digital Innovation</div>
        </div>
    </div>
</div>

<div class="container py-[100px]">
    <div class="grid grid-cols-2">
        <div class="text-[36px]">
            <div class="mb-12">
                Datum is your trusted partner in digital transformation, seamlessly integrating Cloud
                Solutions, Software Engineering, and Data & AI to help businesses scale, innovate,
                and stay ahead.
            </div>
            <button>
                Schedule a consultation with our expert
            </button>
        </div>
        <div class="flex justify-center">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_1.png'  ?>" />
        </div>
    </div>
</div>

<!-- TODO Complete rest code of homepage -->

<?php get_footer(); ?>
