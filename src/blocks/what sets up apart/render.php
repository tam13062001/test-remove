<?php
$items = $attributes['items'] ?? [];

if (empty($items)) return;

echo '<div class="container py-[60px] lg:py-70px]">';
echo '<h1 class="text-[32px] lg:text-[40px] font-bold mb-8 lg:mb-[60px]">' . datum_get_translation('section.what_sets_us_apart') . '</h1>';
echo '<div class="grid grid-cols-1 md:grid-cols-3 gap-8 xl:gap-12">';

foreach ($items as $item) {
    $title = esc_html($item['title'] ?? '');
    $content = esc_html($item['content'] ?? '');
    $media_url = esc_url($item['media_url'] ?? '');
    $media_type = $item['media_type'] ?? 'video';

    echo '<div class="bg-white rounded-lg relative h-[346px] lg:h-[520px]">';

    if ($media_type === 'video') {
        echo '<video class="w-full h-full object-cover absolute top-0 left-0" autoplay muted loop playsinline>';
        echo '<source src="' . $media_url . '" type="video/mp4">';
        echo '</video>';
    } else {
        echo '<img class="w-full h-full object-cover absolute top-0 left-0 brightness-50" src="' . $media_url . '" />';
    }

    echo '<div class="text-white relative p-10 flex flex-col justify-between h-full">';
    echo '<h2 class="text-2xl font-[500] mb-4 mt-4">' . datum_get_translation($title) . '</h2>';
    echo '<p class="font-[200] min-h-[160px]">' . datum_get_translation($content) . '</p>';
    echo '</div></div>';
}

echo '</div></div>';
