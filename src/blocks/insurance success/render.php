<?php
$title = $attributes['title'] ?? '';
$description = $attributes['description'] ?? '';
$case_study_title = $attributes['case_study_title'] ?? '';
$case_study_content = $attributes['case_study_content'] ?? '';
$image_url = $attributes['image_url'] ?? get_assets_from_path('images/image 26.png');
?>

<div class="container my-[44px] lg:my-[100px]">
    <h2 class="font-bold lg:text-[36px] text-[20px] mb-6"><?php echo esc_html(datum_translate($title)); ?></h2>
    <p class="lg:py-[100px] lg:text-[20px] text-[16px] lg:w-[785px] w-full"><?php echo esc_html(datum_translate($description)); ?></p>

    <div class="flex flex-col lg:flex-row justify-between">
        <div class="w-full flex flex-col justify-center bg-white pt-6 lg:pt-0 lg:pr-[120px]">
            <div class="font-bold text-[20px] lg:text-[24px] mb-6 lg:mb-[10px] text-[#315CD4]">
                <h2><?php echo esc_html(datum_translate($case_study_title)); ?></h2>
            </div>
            <div class="leading-[170%] lg:pb-[20px]">
                <div class="py-3 flex flex-col lg:flex-row lg:space-x-5">
                    <div class="w-full text-[16px] lg:text-[20px]">
                        <?php echo esc_html(datum_translate($case_study_content)); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex items-end justify-center mt-8 lg:mt-0">
            <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo esc_url($image_url); ?>" alt="" />
        </div>
    </div>
</div>
