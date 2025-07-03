<?php
$markers = [
    ['name' => 'Manila, Philipines', 'x' => '45.8%', 'y' => '22%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '36.5%', 'y' => '26.5%'],
    ['name' => 'Bangkok, Thailand', 'x' => '30.7%', 'y' => '25.3%'],
    ['name' => 'Sydney, Australia', 'x' => '67.5%', 'y' => '75%'],
    ['name' => 'Aukland, NZ', 'x' => '84%', 'y' => '83.8%'],
];
?>

<?php
$markers_mb = [
    ['name' => 'Manila, Philipines','x' => '41.8%', 'y' => '32.5%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '28.8%', 'y' => '36.5%'],
    ['name' => 'Bangkok, Thailand',  'x' => '20.8%', 'y' => '36%'],
    ['name' => 'Sydney, Australia', 'x' => '70.8%', 'y' => '73%'],
    ['name' => 'Aukland, NZ', 'x' => '94.2%', 'y' => '79.5%'],
];
?>


<div class=" hidden  lg:block pb-[100px] 2xl:pb-[400px]  relative overflow-cover">
    <div class="mx-auto lg:absolute top-0 w-full h-[957px]">
        <img class="relative h-full w-full" style="position: relative; height: 100%; width: 100%;"  alt="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/new-map.png' ?>" />
        <?php foreach ($markers as $marker): ?>
            <div
                class="absolute"
                style="left:<?php echo $marker['x']; ?>; top:<?php echo $marker['y']; ?>;"
            >
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

    <div class="container mx-auto relative z-10 text-align-center pt-[60px] lg:pt-[500px] pb-[60px] lg:pb-[100px] lg:pl-[80px]  2xl:pl-0">
        <h2 class="lg:text-[40px] font-bold">Locations</h2>
        <div class="lg:text-[20px] font-regular mt-4 mb-8 w-[405px]">
            <p>We’re growing across APAC guided by clarity in strategy, care for every client, and a clear sense of purpose. Our solutions are rooted in local understanding and built to drive meaningful impact across the region.</p>
        </div>
    </div>
</div>

<!-- mobile -->
<div class="lg:hidden pb-[40px] pt-[100px]">
    <div class="w-auto h-full relative overflow-cover">
        <img class="h-full w-full block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-mb.png' ?>" />
        <?php foreach ($markers_mb as $i => $marker): ?>
            <div
                class="absolute"
                style="left:<?php echo $marker['x']; ?>; top:<?php echo $marker['y']; ?>;"
            >
                <img
                    src="<?php echo get_stylesheet_directory_uri().'/assets/images/marker.png' ?>"
                    alt="<?php echo $marker['name']; ?>"
                    class="w-6 h-6 cursor-pointer"
                    onclick="showMobileMarkerName(<?php echo $i; ?>)"
                />
                <?php if ($marker['name'] === 'Aukland, NZ' || $marker['name'] === 'Sydney, Australia'): ?>
                    <div
                        class="marker-label-mobile bg-white text-[#315CD4] text-xs px-3 py-1 rounded shadow font-bold border border-gray-200"
                        style="display:none; position:absolute; right:110%; top:50%; transform:translateY(-50%); white-space:nowrap;"
                        id="marker-label-mb-<?php echo $i; ?>"
                    >
                        <?php echo $marker['name']; ?>
                    </div>
                <?php else: ?>
                    <div
                        class="marker-label-mobile bg-white text-[#315CD4] text-xs px-3 py-1 rounded shadow font-bold border border-gray-200"
                        style="display:none; position:absolute; left:110%; top:50%; transform:translateY(-50%); white-space:nowrap;"
                        id="marker-label-mb-<?php echo $i; ?>"
                    >
                        <?php echo $marker['name']; ?>
                    </div>
                <?php endif; ?>
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
    <div class="px-10 ">
        <h2 class="text-[32px] font-bold">Locations</h2>
        <div class="text-[16px] font-regular mt-4 mb-8">
            <p>We're growing across APAC guided by clarity in strategy, care for every client, and a clear sense of purpose. Our solutions are rooted in local understanding and built to drive meaningful impact across the region.</p>
        </div>
    </div>
</div>

