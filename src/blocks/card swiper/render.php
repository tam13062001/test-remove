<?php
$title = $attributes['title'] ?? '';
$data = $attributes['data'] ?? [];

echo '<div class="container lg:py-[100px] py-[40px]">';
echo '<h1 class="font-[700] text-[24px] lg:text-[36px]  mb-2 lg:mb-[50px]">' . esc_html($title) . '</h1>';
echo '</div>';

echo '<div class="py-[60px] lg:py-[50px] mx-auto px-4 xl:px-0">';
$props = array(
  'data' => $data,
  'slidesPerView' => 'auto',
);
render_rocket_block('card-swiper', $props);
echo '</div>';
