<?php
$markers_2xl = [
    ['name' => 'Manila, Philipines', 'x' => 877, 'y' => 273],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => 700, 'y' => 340],
    ['name' => 'Bangkok, Thailand', 'x' => 590, 'y' => 320],
    ['name' => 'Sydney, Australia', 'x' => 1295, 'y' => 957],
    ['name' => 'Aukland, NZ', 'x' => 1620, 'y' => 1062],
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
    ['name' => 'Manila, Philipines', 'x' => 156, 'y' => 130],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => 108, 'y' => 147],
    ['name' => 'Bangkok, Thailand', 'x' => 75, 'y' => 144],
    ['name' => 'Sydney, Australia', 'x' => 270, 'y' => 307],
    ['name' => 'Aukland, NZ', 'x' => 361, 'y' => 334],
];
?>


<div class=" hidden 2xl:hidden lg:block pb-[100px] 2xl:pb-[400px] relative overflow-cover">
    <div class="mx-auto lg:absolute top-0 w-full h-full">
        <img class="w-full" src="<?php echo get_stylesheet_directory_uri().'/assets/images/new-map.png' ?>" />
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
        <img class="h-[438.07px] w-[390px] block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-mb.png' ?>" />
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

<!-- 2xl -->
<div class="hidden 2xl:block pb-[400px] relative overflow-cover">
    <div class="mx-auto absolute top-0 w-full h-full">
        <img class="w-full" src="<?php echo get_stylesheet_directory_uri().'/assets/images/new-map.png' ?>" />
        <?php foreach ($markers_2xl as $marker): ?>
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

    <div class="container mx-auto relative z-10 text-align-center pt-[60px] 2xl:pt-[600px]  2xl:pl-[20px]">
        <h2 class="2xl:text-[40px] font-bold">Locations</h2>
        <div class="2xl:text-[20px] font-regular mt-4 mb-8 w-[405px]">
            <p>We’re growing across APAC guided by clarity in strategy, care for every client, and a clear sense of purpose. Our solutions are rooted in local understanding and built to drive meaningful impact across the region.</p>
        </div>
    </div>
</div>