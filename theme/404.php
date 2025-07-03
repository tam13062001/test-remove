<?php get_header(); ?>


<div class="py-[00px] lg:py-[130px] relative min-h-[600px] overflow-hidden">
    <div class="hidden lg:block lg:absolute top-[100px] right-[330px] lg:w-auto lg:h-auto translate-x-1/3 z-[-1]">
        <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/404.png' ?>" />
    </div>

    <div class=" lg:hidden absolute top-[100px] -right-[100px] w-[466.66px] h-[400px] translate-x-1/3 z-[-1]">
        <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/404.png' ?>" />
    </div>

    <div class="lg:px-16 px-5 pt-[80px] pb-[80px] lg:pt-[240px] lg:pb-[500px] grid grid-cols-1 lg:grid-cols-2 z-10">
        <div class="lg:hidden flex items-center ">
            <h2 class="text-primary text-[128px] lg:text-[300px] font-bold font-light lg:ml-[80px] 2xl:ml-[290px]">404</h2>
        </div>
        <div class="flex flex-col h-full lg:text-left">
            <h2 class="text-[#000] text-[32px] lg:text-[40px] font-bold mb-4">
                We couldn't find what<br class="hidden lg:block"> you were looking for.
            </h2>
            <p class="text-[16px] lg:text-[20px] leading-[170%] mb-6">
                Unfortunately the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exist.
                Check the URL you entered for any mistakes and try again. Alternatively, search for whatever is missing or take a look around the rest of our site.
            </p>
        </div>
        <div class="lg:block hidden flex items-center justify-center">
            <h2 class="text-primary text-[120px] lg:text-[300px] font-bold font-light lg:ml-[80px] 2xl:ml-[290px]">404</h2>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer(); ?>