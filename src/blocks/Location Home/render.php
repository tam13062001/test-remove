<?php
$title = $attributes['title'] ?? 'locations.title';
$description = $attributes['description'] ?? 'locations.description';
$markers = $attributes['markers'] ?? [];
$markers_ipad = $attributes['markers_ipad'] ?? [];
$markers_mobile = $attributes['markers_mobile'] ?? [];

if (!function_exists('render_marker_list')) {
    function render_marker_list($markers, $isMobile = false) {
        foreach ($markers as $i => $marker):
            $side = in_array($marker['name'], ['Aukland, NZ', 'Sydney, Australia']) ? 'right' : 'left';
            ?>
            <div class="absolute" style="left:<?php echo esc_attr($marker['x']); ?>; top:<?php echo esc_attr($marker['y']); ?>;">
                <img
                    src="<?php echo get_stylesheet_directory_uri().'/assets/images/marker.png'; ?>"
                    alt="<?php echo esc_attr($marker['name']); ?>"
                    class="w-6 h-6 cursor-pointer"
                    <?php if ($isMobile): ?>
                        onclick="showMobileMarkerName(<?php echo $i; ?>)"
                    <?php endif; ?>
                />
                <div
                    class="marker-label-mobile bg-white text-[#315CD4] text-xs px-3 py-1 rounded shadow font-bold border border-gray-200"
                    style="display:<?php echo $isMobile ? 'none' : 'block'; ?>; position:absolute; <?php echo $side; ?>:110%; top:50%; transform:translateY(-50%); white-space:nowrap;"
                    id="marker-label-mb-<?php echo $i; ?>"
                >
                    <?php echo esc_html($marker['name']); ?>
                </div>
            </div>
            <?php
        endforeach;
    }
}
?>

<!-- Desktop -->
<div class="hidden lg:block pb-[100px] 2xl:pb-[400px] relative overflow-cover">
    <div class="mx-auto lg:absolute top-0 w-full h-[957px]">
        <img class="relative h-full w-full" src="<?php echo get_stylesheet_directory_uri().'/assets/images/image 27.png' ?>" alt="" />
        <?php render_marker_list($markers); ?>
    </div>
    <div class="container mx-auto relative z-10 text-align-center pt-[60px] lg:pt-[500px] pb-[60px] lg:pb-[100px] lg:pl-[80px] 2xl:pl-0">
        <h2 class="lg:text-[36px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="lg:text-[20px] mt-4 mb-8 w-[405px]">
            <p><?php echo datum_translate($description); ?></p>
        </div>
    </div>
</div>

<!-- iPad -->
<div class="lg:hidden hidden md:block pb-[40px] pt-[100px] relative">
    <div class="w-auto h-full relative overflow-cover">
        <img class="h-full w-full block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-mb.png' ?>" />
        <?php render_marker_list($markers_ipad, true); ?>
    </div>
    <div class="px-10">
        <h2 class="text-[32px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="text-[16px] mt-4 mb-8">
            <p><?php echo datum_translate($description); ?></p>
        </div>
    </div>
</div>

<!-- Mobile -->
<div class="lg:hidden md:hidden pb-[40px] pt-[100px] relative">
    <div class="w-auto h-full relative overflow-cover">
        <img class="h-full w-full block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-mb.png' ?>" />
        <?php render_marker_list($markers_mobile, true); ?>
    </div>
    <div class="px-10">
        <h2 class="text-[32px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="text-[16px] mt-4 mb-8">
            <p><?php echo datum_translate($description); ?></p>
        </div>
    </div>
</div>

<script>
    function showMobileMarkerName(idx) {
        document.querySelectorAll('.marker-label-mobile').forEach(el => el.style.display = 'none');
        const label = document.getElementById('marker-label-mb-' + idx);
        if (label) label.style.display = 'block';
    }
</script>
