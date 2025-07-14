<?php
$title = $attributes['title'] ?? 'locations.title';
$description = $attributes['description'] ?? 'locations.description';

$markers = [
    ['name' => 'Manila, Philipines', 'x' => '45.8%', 'y' => '22%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '36.5%', 'y' => '26.5%'],
    ['name' => 'Bangkok, Thailand', 'x' => '30.7%', 'y' => '25.3%'],
    ['name' => 'Sydney, Australia', 'x' => '67.5%', 'y' => '75%'],
    ['name' => 'Aukland, NZ', 'x' => '84%', 'y' => '83.8%'],
];

$markers_mb = [
    ['name' => 'Manila, Philipines','x' => '41.5%', 'y' => '33.5%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '28%', 'y' => '37%'],
    ['name' => 'Bangkok, Thailand',  'x' => '20.8%', 'y' => '36%'],
    ['name' => 'Sydney, Australia', 'x' => '69.8%', 'y' => '73%'],
    ['name' => 'Aukland, NZ', 'x' => '94.2%', 'y' => '80%'],
];

$markers_ipad = [
    ['name' => 'Manila, Philipines','x' => '40.8%', 'y' => '30.5%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '27%', 'y' => '34.8%'],
    ['name' => 'Bangkok, Thailand',  'x' => '19%', 'y' => '34%'],
    ['name' => 'Sydney, Australia', 'x' => '68.8%', 'y' => '72%'],
    ['name' => 'Aukland, NZ', 'x' => '93.2%', 'y' => '78%'],
];
?>

<!-- Desktop -->
<div class="hidden lg:block pb-[100px] 2xl:pb-[400px] relative overflow-cover">
    <div class="mx-auto lg:absolute top-0 w-full h-[957px]">
        <img class="relative h-full w-full" style="position: relative; height: 100%; width: 100%;"  alt="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/image 27.png' ?>" />
        <?php foreach ($markers as $marker): ?>
            <div class="absolute" style="left:<?php echo $marker['x']; ?>; top:<?php echo $marker['y']; ?>;">
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/marker.png' ?>" alt="<?php echo $marker['name']; ?>" class="w-6 h-6" />
                <?php if ($marker['name'] === 'Bangkok, Thailand'): ?>
                    <span class="text-xs text-[#315CD4] font-bold bg-gray-50 rounded px-2 py-1 mt-1 whitespace-nowrap"
                          style="position:absolute; right:110%; top:50%; transform:translateY(-50%);">
                        <?php echo $marker['name']; ?>
                    </span>
                <?php else: ?>
                    <span class="text-xs text-[#315CD4] font-bold bg-gray-50 rounded px-2 py-1 mt-1 whitespace-nowrap"
                          style="position:absolute; left:110%; top:50%; transform:translateY(-50%);">
                        <?php echo $marker['name']; ?>
                    </span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="container mx-auto relative z-10 text-align-center pt-[60px] lg:pt-[500px] pb-[60px] lg:pb-[100px] lg:pl-[80px] 2xl:pl-0">
        <h2 class="lg:text-[40px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="lg:text-[20px] font-regular mt-4 mb-8 w-[405px]">
            <p><?php echo datum_translate($description); ?></p>
        </div>
    </div>
</div>

<!-- Mobile -->
<div class="lg:hidden md:hidden pb-[40px] pt-[100px]">
    <div class="w-auto h-full relative overflow-cover">
        <img class="h-full w-full block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-mb.png' ?>" />
        <?php foreach ($markers_ipad as $i => $marker): ?>
            <div class="absolute" style="left:<?php echo $marker['x']; ?>; top:<?php echo $marker['y']; ?>;">
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/marker.png' ?>"
                     alt="<?php echo $marker['name']; ?>" class="w-6 h-6 cursor-pointer"
                     onclick="showMobileMarkerName(<?php echo $i; ?>)" />
                <div class="marker-label-mobile bg-white text-[#315CD4] text-xs px-3 py-1 rounded shadow font-bold border border-gray-200"
                     style="display:none; position:absolute; <?php echo in_array($marker['name'], ['Aukland, NZ', 'Sydney, Australia']) ? 'right' : 'left'; ?>:110%; top:50%; transform:translateY(-50%); white-space:nowrap;"
                     id="marker-label-mb-<?php echo $i; ?>">
                    <?php echo $marker['name']; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script>
        function showMobileMarkerName(idx) {
            document.querySelectorAll('.marker-label-mobile').forEach(function(el) {
                el.style.display = 'none';
            });
            var label = document.getElementById('marker-label-mb-' + idx);
            if (label) label.style.display = 'block';
        }
    </script>
    <div class="px-10">
        <h2 class="text-[32px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="text-[16px] font-regular mt-4 mb-8">
            <p><?php echo datum_translate($description); ?></p>
        </div>
    </div>
</div>

<!-- iPad -->
<div class="lg:hidden hidden md:block pb-[40px] pt-[100px]">
    <div class="w-auto h-full relative overflow-cover">
        <img class="h-full w-full block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-mb.png' ?>" />
        <?php foreach ($markers_mb as $i => $marker): ?>
            <div class="absolute" style="left:<?php echo $marker['x']; ?>; top:<?php echo $marker['y']; ?>;">
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/marker.png' ?>"
                     alt="<?php echo $marker['name']; ?>" class="w-6 h-6 cursor-pointer"
                     onclick="showMobileMarkerName(<?php echo $i; ?>)" />
                <div class="marker-label-mobile bg-white text-[#315CD4] text-xs px-3 py-1 rounded shadow font-bold border border-gray-200"
                     style="display:none; position:absolute; <?php echo in_array($marker['name'], ['Aukland, NZ', 'Sydney, Australia']) ? 'right' : 'left'; ?>:110%; top:50%; transform:translateY(-50%); white-space:nowrap;"
                     id="marker-label-mb-<?php echo $i; ?>">
                    <?php echo $marker['name']; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script>
        function showMobileMarkerName(idx) {
            document.querySelectorAll('.marker-label-mobile').forEach(function(el) {
                el.style.display = 'none';
            });
            var label = document.getElementById('marker-label-mb-' + idx);
            if (label) label.style.display = 'block';
        }
    </script>
    <div class="px-10">
        <h2 class="text-[32px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="text-[16px] font-regular mt-4 mb-8">
            <p><?php echo datum_translate($description); ?></p>
        </div>
    </div>
</div>
