<div class="py-[60px] lg:py-[122px]  w-full">
    <div class="container">
        <!-- Layout chính chia thành 2 cột -->
        <div class="flex flex-col lg:flex-row">
            <!-- Cột 1 - 1/5 width chỉ chứa logo -->
            <div class="lg:w-1/5 mb-9 lg:mb-0">
                <a href="/">
                    <img class="w-[142px]" alt="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png' ?>" />
                </a>
            </div>

            <!-- Cột 2 - 4/5 width chứa toàn bộ nội dung còn lại -->
            <div class="lg:w-4/5">
                <div class="mb-8">
                    <h3 class="font-Medium lg:text-[24px]"> <?php echo datum_get_translation('digital_partner'); ?></h3>
                </div>
                <!-- Phần menu 4 cột -->
                <?php get_template_part('template-parts/footer/menu'); ?>


                <!-- Đường kẻ ngang -->
                <div class="flex items-center my-10">
                    <div class="border-t border-[#000000] w-full flex-grow"></div>
                </div>

                
<!-- Phần Our Offices -->
<div class="mb-[100px]">
    <div class="lg:text-[16px] font-bold font-[700] mb-4 uppercase"><?php echo datum_translate('footer.our_offices') ?></div>
    <div class="flex flex-col gap-8 mt-4">
        <!-- Hàng 1: New Zealand & Australia -->
        <div class="flex flex-row gap-4 lg:gap-8 w-full">
            <div class="flex-1 lg:text-[16px] text-[11px] lg:space-y-2">
                <h1 class="font-bold text-[#2569ED] py-4"><?php echo datum_translate('footer.new_zealand.country') ?></h1>
                <h1 class="font-bold text-[#000000] lg:text-[16px] text-[10px]"><?php echo datum_translate('footer.new_zealand.company') ?></h1>
                <p><?php echo datum_translate('footer.new_zealand.address') ?></p>
            </div>
            <div class="flex-1 lg:text-[16px] text-[11px] lg:space-y-2">
                <h1 class="font-bold text-[#2569ED] py-4"><?php echo datum_translate('footer.australia.country') ?></h1>
                <h1 class="font-bold text-[#000000] lg:text-[16px] text-[10px]"><?php echo datum_translate('footer.australia.company') ?></h1>
                <p><?php echo datum_translate('footer.australia.address') ?></p>
            </div>
        </div>
        <!-- Hàng 2: VietNam & Philippines -->
        <div class="flex flex-row gap-4 lg:gap-8 w-full">
            <div class="flex-1 lg:text-[16px] text-[11px] lg:space-y-2">
                <h1 class="font-bold text-[#2569ED] py-4"><?php echo datum_translate('footer.vietnam.country') ?></h1>
                <h1 class="font-bold text-[#000000] lg:text-[16px] text-[10px]"><?php echo datum_translate('footer.vietnam.company') ?></h1>
                <p><?php echo datum_translate('footer.vietnam.address') ?></p>
                <p><?php echo datum_translate('footer.vietnam.phone') ?><span class="text-[#2569ED] lg:ml-3 lg:text-[16px] text-[10px]"><?php echo datum_translate('footer.vietnam.phone_number') ?> </span></p>
                <p><?php echo datum_translate('footer.vietnam.email') ?><span class="text-[#2569ED] lg:ml-5 lg:text-[16px] text-[10px]"><?php echo datum_translate('footer.vietnam.email_address') ?> </span></p>
            </div>
            <div class="flex-1 lg:text-[16px] text-[11px] lg:space-y-2">
                <h1 class="font-bold text-[#2569ED] py-4"><?php echo datum_translate('footer.philippines.country') ?></h1>
                <h1 class="font-bold text-[#000000] lg:text-[16px] text-[10px]"><?php echo datum_translate('footer.philippines.company') ?></h1>
                <p><?php echo datum_translate('footer.philippines.address') ?></p>
            </div>
        </div>
    </div>
</div>

                <!-- Phần privacy menu -->
                <div class="flex lg py-0 box-border max-w-full mt-10">
                    <?php get_template_part('template-parts/footer/privacy-menu'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>