<?php
$title = $args['title'] ?? '';
$breadcrumbs = $args['breadcrumbs'] ?? array();
$background_image = $args['background_image'] ?? '';
?>

<div class="h-[603px] relative">
    <img class="absolute top-0 object-cover h-full w-full" src="<?php echo $background_image;  ?>" />
    <div class="container relative flex items-center h-full">
        <div class="">
            <div class="font-[700] text-white">
                <?php if (!empty($breadcrumbs)): ?>
                <div class="flex text-[14px] items-center space-x-2 mb-5">
                    <?php foreach ($breadcrumbs as $index => $item): ?>
                    <div><?php echo $item ?></div>
                    <div>
                        <svg width="4" height="7" viewBox="0 0 4 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 3.5L0.25 6.53109L0.25 0.468911L4 3.5Z" fill="white" />
                        </svg>
                    </div>
                    <?php endforeach; ?>

                </div>
                <?php endif; ?>
                <div class="text-[32px] lg:text-[40px] w-3/5 min-w-[300px]">
                    <?php echo $title; ?>
                </div>
            </div>
        </div>
    </div>

</div>