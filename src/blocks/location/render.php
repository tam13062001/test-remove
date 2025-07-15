<?php
$title = $attributes['title'] ?? 'Locations';
$image_url = $attributes['imageUrl'] ?? '';
$locations = $attributes['locations'] ?? [];

// Đảm bảo dữ liệu locations là mảng hợp lệ
$valid_locations = array_filter((array)$locations, function($item) {
    return is_array($item) || is_object($item);
});
?>

<div class="py-[60px] lg:py-[80px]">
    <div class="container mb-[50px] lg:mb-[100px]">
        <h2 class="text-[32px] lg:text-[36px] font-bold">
            <?php echo esc_html($title); ?>
        </h2>
    </div>
    <div class="relative">
        <?php if ($image_url) : ?>
        <div class="lg:block lg:w-1/2 lg:absolute right-0 top-0 lg:h-[710px] overflow-hidden">
            <div class="top-0 left-0 w-full z-10">
                <img class="object-cover h-auto w-full" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" />
            </div>
        </div>
        <?php endif; ?>

        <div class="container relative lg:pt-[50px] lg:py-[100px] -mt-10">
            <div class="w-full lg:w-3/5">
                <div class="bg-lightblue px-8 lg:px-[115px] py-4 lg:py-20 [&>:not(:last-child)]:border-b [&>:not(:last-child)]:border-white">
                    <?php 
                    foreach ($valid_locations as $index => $item) {
                        // Chuẩn hóa dữ liệu
                        $normalized_item = [
                            'country' => $item['country'] ?? '',
                            'open' => $index === 0, // Mặc định mở item đầu tiên
                            'locations' => array_map(function($loc) {
                                return [
                                    'title' => $loc['title'] ?? '',
                                    'address' => $loc['address'] ?? ''
                                ];
                            }, $item['locations'] ?? [])
                        ];
                        
                        if (!empty($normalized_item['country'])) {
                            render_rocket_block('location-item', $normalized_item);
                        }
                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>