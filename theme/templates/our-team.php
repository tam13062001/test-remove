<?php /* Template Name: Our Team Template */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', null, array(
    'title' => 'Our Team',
    'background_image' => get_assets_from_path('images/datum-our-team.jpg')
)); ?>

<!-- second section -->
<div class=" ">
    <div class="container">
        <div class="flex pt-[60px] lg:pt-[93px] lg:w-[823px]">
            <div class="text-[24px] lg:text-[36px] font-normal lg:leading-[170%] text-black">
                <div>
                    Our team of consultants tackles business challenges and delivers innovative solutions.
                </div>
            </div>
        </div>
    </div>
</div>

<div class=" mt-[-100px] pb-[146px]" ></div>



<?php get_template_part('template-parts/content/member-table'); ?>


<!-- Location -->
<?php get_template_part('template-parts/content/location-2'); ?>

<!-- <?php get_template_part('template-parts/content/create-post'); ?> -->

<?php get_template_part('template-parts/content/back-to-top'); ?>

<?php get_footer(); ?>