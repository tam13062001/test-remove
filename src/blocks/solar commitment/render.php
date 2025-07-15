<?php
$image1 = $attributes['commitmentImage'] ?? '';
$image2 = $attributes['caseImage'] ?? '';
?>

<div class="container my-[40px] lg:my-[100px]">
    <div class="flex flex-col lg:flex-row justify-between">
        <div class="w-full flex items-end justify-center mt-8 lg:mt-0">
            <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo esc_url($image1); ?>" />
        </div>
        <div class="w-full flex flex-col justify-center bg-white lg:gap-y-[30px] pt-6 lg:pt-0 lg:pl-[160px]">
            <h2 class="font-bold text-[20px] lg:text-[24px] mb-6 text-[#000000]">
                <?php echo esc_html($attributes['commitmentTitle']); ?>
            </h2>
            <p class="leading-[170%] text-[16px] lg:text-[20px]">
                <?php echo esc_html($attributes['commitmentContent']); ?>
            </p>
        </div>
    </div>
</div>

<div class="container my-[44px] lg:my-[160px]">
    <h2 class="font-bold lg:text-[36px] text-[24px]">
        <?php echo esc_html($attributes['successTitle']); ?>
    </h2>
    <p class="py-[18px] lg:py-[80px] text-[16px] lg:text-[20px]">
        <?php echo esc_html($attributes['successIntro']); ?>
    </p>
    <div class="flex flex-col lg:flex-row justify-between">
        <div class="w-full flex flex-col justify-center bg-white pt-6 lg:pt-0 lg:pr-[60px]">
            <h2 class="font-bold text-[20px] lg:text-[24px] mb-6 text-[#315CD4]">
                <?php echo esc_html($attributes['caseTitle']); ?>
            </h2>
            <p class="leading-[170%] text-[16px] lg:text-[20px]">
                <?php echo esc_html($attributes['caseContent']); ?>
            </p>
        </div>
        <div class="w-full flex items-end justify-center mt-8 lg:mt-0">
            <img class="object-cover w-full h-[220px] lg:h-full" src="<?php echo esc_url($image2); ?>" />
        </div>
    </div>
</div>

<div class="container lg:pb-[50px] lg:pt-[24px]">
    <p class="text-[16px] lg:text-[20px] leading-[170%] font-bold lg:w-[785px]">
        <?php echo esc_html($attributes['footerContent']); ?>
    </p>
</div>
