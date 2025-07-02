<?php
$markers_2xl = [
    ['name' => 'Manila, Philipines', 'x' => 657, 'y' => 213],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => 522, 'y' => 253],
    ['name' => 'Bangkok, Thailand', 'x' => 440, 'y' => 235],
    ['name' => 'Sydney, Australia', 'x' => 964, 'y' => 722],
    ['name' => 'Aukland, NZ', 'x' => 1210, 'y' => 797],
];
?>

<?php
$markers = [
    ['name' => 'Manila, Philipines', 'x' => 667, 'y' => 213],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => 532, 'y' => 253],
    ['name' => 'Bangkok, Thailand', 'x' => 447, 'y' => 243],
    ['name' => 'Sydney, Australia', 'x' => 984, 'y' => 722],
    ['name' => 'Aukland, NZ', 'x' => 1235, 'y' => 807],
];
?>

<?php
$markers_mb = [
    ['name' => 'Manila, Philipines', 'x' => 156, 'y' => 150],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => 104, 'y' => 167],
    ['name' => 'Bangkok, Thailand', 'x' => 77, 'y' => 159],
    ['name' => 'Sydney, Australia', 'x' => 275, 'y' => 337],
    ['name' => 'Aukland, NZ', 'x' => 361, 'y' => 370],
];
?>


<div class=" hidden lg:block pb-[100px] 2xl:pb-[400px] relative overflow-cover">
    <div class="mx-auto lg:absolute top-0 w-full h-full">
        <img class="2xl:w-full" src="<?php echo get_stylesheet_directory_uri().'/assets/images/new-map.png' ?>" />
        <?php foreach ($markers as $marker): ?>
            <div
                class="absolute flex flex-col items-center"
                style="left:<?php echo $marker['x']; ?>px; top:<?php echo $marker['y']; ?>px;"
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

    <div class="container mx-auto relative z-10 text-align-center pt-[60px] lg:pt-[500px] pb-[60px] lg:pb-[100px] lg:pl-[80px]">
        <h2 class="lg:text-[40px] font-bold">Locations</h2>
        <div class="lg:text-[20px] font-regular mt-4 mb-8 w-[405px]">
            <p>We’re growing across APAC guided by clarity in strategy, care for every client, and a clear sense of purpose. Our solutions are rooted in local understanding and built to drive meaningful impact across the region.</p>
        </div>
    </div>
</div>

<!-- mobile -->
<div class="lg:hidden pb-[40px] pt-[100px]">
    <div class="w-auto h-full relative overflow-cover">
        <img class=" block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-mb.png' ?>" />
        <?php foreach ($markers_mb as $i => $marker): ?>
            <div
                class="absolute"
                style="left:<?php echo $marker['x']; ?>px; top:<?php echo $marker['y']; ?>px;"
            >
                <img
                    src="<?php echo get_stylesheet_directory_uri().'/assets/images/marker.png' ?>"
                    alt="<?php echo $marker['name']; ?>"
                    class="w-6 h-6 cursor-pointer"
                    onclick="showMobileMarkerName(<?php echo $i; ?>)"
                />
                <?php if ($marker['name'] === 'Aukland, NZ' || 'Sydney, Australia'): ?>
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
            <p>We’re growing across APAC guided by clarity in strategy, care for every client, and a clear sense of purpose. Our solutions are rooted in local understanding and built to drive meaningful impact across the region.</p>
        </div>
    </div>
</div>