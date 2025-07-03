<?php get_header(); ?>


<div class=" py-[50px] relative min-h-[600px] overflow-hidden">
    <div class="hidden lg:block lg:absolute top-[20px] right-[330px] w-auto h-auto translate-x-1/3 z-[-1]">
        <img class="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/404.png' ?>" />
    </div>
    <div class="container pt-[240px] pb-[500px] grid grid-cols-2 z-10">
        <div class=" flex flex-col justify-center h-full">
            <h2 class="text-[#00000] text-[40px] font-bold mb-4">We couldn't find what<br> you were looking for.</h2>
            <p class="text-[20px] leading-[170%]" href="/">Unfortunately the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exist.
    Check the URL you entered for any mistakes and try again. Alternatively, search for whatever is missing or take a look around the rest of our site.</p>
        </div>
        <div>
            <h2 class="text-primary text-[300px] font-bold font-light lg:ml-[80px] 2xl:ml-[290px]">404</h2>
        </div>
    </div>
</div>

<?php get_footer(); ?>