<?php
$intro = $attributes['intro'] ?? '';
$description = $attributes['description'] ?? '';

// Tách mô tả theo đoạn (phân biệt bởi dòng trống hoặc 2 \n)
$paragraphs = preg_split("/\n\s*\n/", $description);

ob_start();
?>
<div class="">
    <div class="container">
        <div class="flex pt-[60px] lg:pt-[93px] lg:w-[723px]">
            <div class="text-[24px] lg:text-[36px] font-normal lg:leading-[170%] text-black">
                <div><?php echo esc_html($intro); ?></div>
            </div>
        </div>

        <div class="flex pt-6 lg:pt-[70px] lg:w-[785px]">
            <div class="text-[16px] lg:text-[20px] font-normal leading-[170%] text-black tracking-[-0.2px]">
                <div>
                    <?php foreach ($paragraphs as $para): ?>
                        <p class="mb-8"><?php echo esc_html(trim($para)); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo ob_get_clean(); ?>
