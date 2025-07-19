<?php
$title = 'locations.title';
$description = 'locations.description';

$markers = [
    ['name' => 'Manila, Philipines', 'x' => '45.6%', 'y' => '22%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '36.3%', 'y' => '26.3%'],
    ['name' => 'Bangkok, Thailand', 'x' => '30.6%', 'y' => '25.25%'],
    ['name' => 'Sydney, Australia', 'x' => '67.5%', 'y' => '75%'],
    ['name' => 'Aukland, NZ', 'x' => '84%', 'y' => '83.8%'],
];

$markers_xl = [
    ['name' => 'Manila, Philipines', 'x' => '52.3%', 'y' => '12.67%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '42.1%', 'y' => '18.8%'],
    ['name' => 'Bangkok, Thailand', 'x' => '35.6%', 'y' => '18%'],
    ['name' => 'Sydney, Australia', 'x' => '76.5%', 'y' => '72%'],
    ['name' => 'Aukland, NZ', 'x' => '95%', 'y' => '82.8%'],
];

$markers_4k = [
    ['name' => 'Manila, Philipines', 'x' => '52.3%', 'y' => '13.8%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '44.5%', 'y' => '19%'],
    ['name' => 'Bangkok, Thailand', 'x' => '39.8%', 'y' => '17.5%'],
    ['name' => 'Sydney, Australia', 'x' => '70.2%', 'y' => '72.5%'],
    ['name' => 'Aukland, NZ', 'x' => '84.5%', 'y' => '83.2%'],
];
?>

<?php
$markers_mb = [
    ['name' => 'Manila, Philipines','x' => '41.5%', 'y' => '33.5%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '28%', 'y' => '37%'],
    ['name' => 'Bangkok, Thailand',  'x' => '20.8%', 'y' => '36%'],
    ['name' => 'Sydney, Australia', 'x' => '69.8%', 'y' => '73%'],
    ['name' => 'Aukland, NZ', 'x' => '94.2%', 'y' => '80%'],
];
?>

<?php
$markers_ipad = [
    ['name' => 'Manila, Philipines','x' => '40.8%', 'y' => '30.5%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '27%', 'y' => '34.8%'],
    ['name' => 'Bangkok, Thailand',  'x' => '19%', 'y' => '34%'],
    ['name' => 'Sydney, Australia', 'x' => '68.8%', 'y' => '72%'],
    ['name' => 'Aukland, NZ', 'x' => '93.2%', 'y' => '78%'],
];

$markers_ipad_pro = [
    ['name' => 'Manila, Philipines','x' => '41.9%', 'y' => '33.5%'],
    ['name' => 'Ho Chi Minh City, VietNam', 'x' => '28.7%', 'y' => '37.5%'],
    ['name' => 'Bangkok, Thailand',  'x' => '20.9%', 'y' => '36.3%'],
    ['name' => 'Sydney, Australia', 'x' => '70.8%', 'y' => '73.5%'],
    ['name' => 'Aukland, NZ', 'x' => '94.7%', 'y' => '80%'],
];
?>


<div class="ipadpro:hidden hidden 2xl:hidden  ipadproplus:block pb-[100px]  relative overflow-cover">
    <div class="mx-auto lg:absolute top-0 w-full">
        <img class=" relative h-auto w-auto" style="position: relative; height: 100%; width: 100%;"  alt="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/image 27.png' ?>" />
        <?php foreach ($markers as $marker): ?>
            <div
                class="absolute"
                style="left:<?php echo $marker['x']; ?>; top:<?php echo $marker['y']; ?>;"
            >
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/marker.png' ?>" alt="<?php echo $marker['name']; ?>" class="w-6 h-6" />
                <?php if ($marker['name'] === 'Bangkok, Thailand' ): ?>
                    <span class="text-xs text-[#315CD4] font-bold bg-gray-50 rounded px-2 py-1 mt-1 whitespace-nowrap"
                          style="position:absolute; right:110%; top:50%; transform:translateY(-50%);">
                        <?php echo $marker['name']; ?>
                    </span>
                <?php  ?>
                    <span class="text-xs text-[#315CD4] font-bold bg-gray-50 rounded px-2 py-1 mt-1 whitespace-nowrap"
                          style="position:absolute; left:110%; top:50%; transform:translateY(-50%);">
                        <?php echo $marker['name']; ?>
                    </span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="container mx-auto relative z-10 text-align-center pt-[60px] lg:pt-[500px] pb-[60px] lg:pb-[100px] lg:pl-[80px]  ">
        <h2 class="lg:text-[40px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="lg:text-[20px] font-regular mt-4 mb-8 w-[405px]">
            <p><?php echo datum_translate($description)?></p>
        </div>
    </div>
</div>

<div class=" hidden 4xl:hidden lg:hidden xxl:block  pb-[300px] relative overflow-cover">
    <div class="mx-auto lg:absolute top-0 w-full lg:h-[957px] 2xl:h-auto">
        <img class="relative h-auto w-full" style="position: relative; height: 100%; width: 100%;"  alt="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/Map BG_xl.png' ?>" />
        <?php foreach ($markers_xl as $marker): ?>
            <div
                class="absolute"
                style="left:<?php echo $marker['x']; ?>; top:<?php echo $marker['y']; ?>;"
            >
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/marker.png' ?>" alt="<?php echo $marker['name']; ?>" class="w-6 h-6" />
                <?php if ($marker['name'] === 'Bangkok, Thailand' || $marker['name'] === 'Aukland, NZ'): ?>
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

    <div class=" mx-auto relative z-10 text-align-center pb-[100px] pt-[500px] pl-[200px]">
        <h2 class="lg:text-[40px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="lg:text-[20px] font-regular mt-4 mb-8 w-[405px]">
            <p><?php echo datum_translate($description)?></p>
        </div>
    </div>
</div>

<div class=" hidden lg:hidden 4xl:block 4xl:pb-[300px]  6xl:pb-[800px] relative overflow-cover">
    <div class="mx-auto lg:absolute top-0 w-full lg:h-[957px] 2xl:h-auto">
        <img class="relative h-auto w-full" style="position: relative; height: 100%; width: 100%;"  alt="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/Map BG.png' ?>" />
        <?php foreach ($markers_4k as $marker): ?>
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

    <div class=" mx-auto relative z-10 text-align-center 4xl:pt-[700px] pb-[100px] 4xl:pl-[600px] pt-[400px] pl-[300px]">
        <h2 class="lg:text-[40px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="lg:text-[20px] font-regular mt-4 mb-8 w-[405px]">
            <p><?php echo datum_translate($description)?></p>
        </div>
    </div>
</div>

<!-- mobile -->
<div class="lg:hidden md:hidden pb-[40px] pt-[100px]">
    <div class="w-auto h-full relative overflow-cover">
        <img class=" h-full w-full block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-mb.png' ?>" />
        <?php foreach ($markers_ipad as $i => $marker): ?>
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
        <h2 class="text-[32px] font-bold"><?php echo datum_translate($title); ?></h2>
        <div class="text-[16px] font-regular mt-4 mb-8">
            <p><?php echo datum_translate($description); ?></p>
        </div>
    </div>
</div>

<!-- ipad -->
<div class="lg:hidden hidden md:block pb-[40px] pt-[100px]">
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
                        class="marker-label-ipad bg-white text-[#315CD4] text-xs px-3 py-1 rounded shadow font-bold border border-gray-200"
                        style="display:none; position:absolute; right:110%; top:50%; transform:translateY(-50%); white-space:nowrap;"
                        id="marker-label-mb-<?php echo $i; ?>"
                    >
                        <?php echo $marker['name']; ?>
                    </div>
                <?php else: ?>
                    <div
                        class="marker-label-ipad bg-white text-[#315CD4] text-xs px-3 py-1 rounded shadow font-bold border border-gray-200"
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
            document.querySelectorAll('.marker-label-ipad').forEach(function(el) {
                el.style.display = 'none';
            });
            var label = document.getElementById('marker-label-mb-' + idx);
            if (label) label.style.display = 'block';
        }
    </script>
    <div class="px-10">
        <h2 class="text-[32px] font-bold">
            <?php echo datum_translate($title); ?>
        </h2>
        <div class="text-[16px] font-regular mt-4 mb-8">
            <p><?php echo datum_translate($description); ?></p>
        </div>
    </div>
</div>

<div class="lg:hidden 2xl:hidden ipadproplus:hidden hidden ipadpro:block pb-[40px] pt-[100px]">
    <div class="w-auto h-full relative overflow-cover">
        <img class="h-full w-full block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/map-mb.png' ?>" />
        <?php foreach ($markers_ipad_pro as $i => $marker): ?>
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
                        class="marker-label-ipad bg-white text-[#315CD4] text-xs px-3 py-1 rounded shadow font-bold border border-gray-200"
                        style="display:none; position:absolute; right:110%; top:50%; transform:translateY(-50%); white-space:nowrap;"
                        id="marker-label-mb-<?php echo $i; ?>"
                    >
                        <?php echo $marker['name']; ?>
                    </div>
                <?php else: ?>
                    <div
                        class="marker-label-ipad bg-white text-[#315CD4] text-xs px-3 py-1 rounded shadow font-bold border border-gray-200"
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
            document.querySelectorAll('.marker-label-ipad').forEach(function(el) {
                el.style.display = 'none';
            });
            var label = document.getElementById('marker-label-mb-' + idx);
            if (label) label.style.display = 'block';
        }
    </script>
    <div class="px-10">
        <h2 class="text-[32px] font-bold">
            <?php echo datum_translate($title); ?>
        </h2>
        <div class="text-[16px] font-regular mt-4 mb-8">
            <p><?php echo datum_translate($description); ?></p>
        </div>
    </div>
</div>