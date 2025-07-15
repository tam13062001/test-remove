<?php
$title = $attributes['title'] ?? '';
$image_url = $attributes['imageUrl'] ?? '';
$items = $attributes['items'] ?? [];

?>

<section class="flex flex-col md:flex-row">
  <div class="w-full md:w-1/2 aspect-square">
    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" class="h-full w-full object-cover" />
  </div>

  <div class="container md:w-1/2 bg-[#C4E1F5] lg:px-[125px] lg:py-[100px] py-[60px]">
    <h2 class="text-[32px] lg:text-[36px] font-bold mb-5 lg:mb-8">
      <?php echo esc_html($title); ?>
    </h2>

    <div class="[&>:not(:last-child)]:border-b [&>:not(:last-child)]:border-white">
      <?php foreach ($items as $index => $item) {
  // Debug để xem cấu trúc dữ liệu
  error_log("Item $index: " . print_r($item, true));
  
  if (is_array($item) && isset($item['title']) && isset($item['content_text'])) {
    render_rocket_block('our-value-item', $item);
  } else {
    // Xử lý trường hợp dữ liệu sai format
    error_log("Invalid item format at index $index");
  }
} ?>

    </div>
  </div>
</section>
