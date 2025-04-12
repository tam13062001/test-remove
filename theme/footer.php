    <div class="py-[60px] lg:py-[122px] border-t border-primary w-full lg:mt-[150px]">
        <div class="container">
            <div class="flex flex-col lg:flex-row lg:mb-[100px] space-y-9 lg:space-y-0">
                <div class="lg:container lg:w-1/5 ">
                    <img class="w-[142px]" alt="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png' ?>" />
                </div>
                <div class="w-full lg:w-2/5 space-y-6">
                    <?php get_template_part('template-parts/footer/menu'); ?>
                </div>
                <div class="lg:w-1/5">
                    <div class="font-[700] text-[16px] mb-4">Offices</div>
                    <div class="grid grid-cols-2 lg:grid-cols-1 gap-4">
                        <div class="text-[15px]">New Zealand</div>
                        <div class="text-[15px]">Australia</div>
                        <div class="text-[15px]">Vietnam</div>
                        <div class="text-[15px]">Philippines</div>
                    </div>
                </div>
                <div class="w-1/5">
<!--                    --><?php //get_template_part('template-parts/footer/social-network'); ?>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row lg:mb-[100px] space-y-9 lg:space-y-0">
                <div class="w-1/5"> </div>
                <div class="flex flex-row lg:justify-start  py-0  box-border max-w-full">
                    <?php get_template_part('template-parts/footer/privacy-menu'); ?>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>