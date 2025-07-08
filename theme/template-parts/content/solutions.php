<div class="relative py-[60px] lg:py-[70px] overflow-hidden">
    <!-- Background Image -->
    <div class="w-full absolute top-1/2 -translate-y-1/2">
        <img
            class="w-full object-contain scale-110 sm:scale-150 lg:scale-90 lg:mt-[140px] "
            src="<?php echo get_assets_from_path('images/img_5.png') ?>"
        />
    </div>

    <div class="relative container">
        <h2 class="text-[32px] lg:text-[40px] font-bold mb-8 lg:mb-[60px]">
            <?php echo datum_get_translation('section.game_changing_solutions') ?>
        </h2>

        <div class="space-y-8 lg:space-y-20">

            <!-- Platform Engineering -->
            <div class="w-full flex flex-col lg:flex-row h-auto lg:h-[453px]">
                <div class="w-full lg:w-[782px] bg-white ml-0 lg:ml-1 p-4 sm:p-6 lg:p-10 shadow-[0_0_10px_rgba(0,0,0,0.1)]">
                    <h3 class="font-[300] text-[20px] sm:text-[24px] lg:text-[36px] text-primary mb-4 lg:mb-5 ml-0 sm:ml-6 lg:ml-20 mt-4">
                        <?php echo datum_translate("solution.platform.title"); ?>
                    </h3>
                    <p class="text-[14px] sm:text-[16px] lg:text-[24px] mb-3 lg:mb-6 leading-[170%] ml-0 sm:ml-6 lg:ml-20">
                        <?php echo datum_translate("solution.platform.desc"); ?>
                    </p>
                    <a href="/our-solutions/platform-engineering/" class="text-primary inline-flex items-center text-[16px] sm:text-[16px] lg:text-[20px] mt-6 sm:mt-10 lg:mt-20 ml-0 sm:ml-6 lg:ml-20">
                        <?php echo datum_translate("common.learn_more"); ?>
                        <span class="ml-1"><i class="fas fa-chevron-right"></i></span>
                    </a>
                </div>
            </div>

            <!-- Digital Transformation -->
            <div class="w-full flex flex-col lg:flex-row justify-end h-auto lg:h-[453px]">
                <div class="w-full lg:w-[782px] bg-white lg:mr-1 p-4 sm:p-6 lg:p-10 shadow-[0_0_10px_rgba(0,0,0,0.1)]">
                    <h3 class="font-[300] text-[20px] sm:text-[24px] lg:text-[36px] text-primary mb-4 lg:mb-5 ml-0 sm:ml-6 lg:ml-20 mt-4">
                        <?php echo datum_translate("solution.digital.title"); ?>
                    </h3>
                    <p class="text-[14px] sm:text-[16px] lg:text-[24px] mb-3 lg:mb-6 leading-[170%] ml-0 sm:ml-6 lg:ml-20">
                        <?php echo datum_translate("solution.digital.desc"); ?>
                    </p>
                    <a href="/our-solutions/digital-transformation/" class="text-primary inline-flex items-center text-[16px] sm:text-[16px] lg:text-[20px] mt-6 sm:mt-10 lg:mt-20 ml-0 sm:ml-6 lg:ml-20">
                        <?php echo datum_translate("common.learn_more"); ?>
                        <span class="ml-1"><i class="fas fa-chevron-right"></i></span>
                    </a>
                </div>
            </div>

            <!-- Integration Solutions -->
            <div class="w-full flex flex-col lg:flex-row h-auto lg:h-[453px]">
                <div class="w-full lg:w-[782px] bg-white ml-0 lg:ml-1 p-4 sm:p-6 lg:p-10 shadow-[0_0_10px_rgba(0,0,0,0.1)]">
                    <h3 class="font-[300] text-[20px] sm:text-[24px] lg:text-[36px] text-primary mb-4 lg:mb-5 ml-0 sm:ml-6 lg:ml-20 mt-4">
                        <?php echo datum_translate("solution.integration.title"); ?>
                    </h3>
                    <p class="text-[14px] sm:text-[16px] lg:text-[24px] mb-3 lg:mb-6 leading-[170%] ml-0 sm:ml-6 lg:ml-20">
                        <?php echo datum_translate("solution.integration.desc"); ?>
                    </p>
                    <a href="/our-solutions/integration/" class="text-primary inline-flex items-center text-[16px] sm:text-[16px] lg:text-[20px] mt-6 sm:mt-10 lg:mt-20 ml-0 sm:ml-6 lg:ml-20">
                        <?php echo datum_translate("common.learn_more"); ?>
                        <span class="ml-1"><i class="fas fa-chevron-right"></i></span>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
