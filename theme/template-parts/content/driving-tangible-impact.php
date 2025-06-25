<?php
$title = $args['title'] ?? 'Default Title';
$heading = $args['heading'] ?? "";
$items = $args['items'] ?? array();
$image_url = $args['image_url'] ?? '';
?>

<div class="relative text-white ">
    <div class="absolute top-0 left-0 right-0 h-full w-full bg-app-gradient">
        <img class="object-cover h-full w-full" src=" <?php echo $image_url  ?>" />
    </div>
    <div class="container relative py-[60px] lg:py-[142px]">
        <div class="text-[22px] lg:text-[24px] font-bold lg:w-[785px]">
            <?php echo $title; ?>
        </div>
        <div class="text-[18px] lg:text-[20px] font-bold lg:py-[40px] lg:w-[785px]">
            <?php echo $heading; ?>
        </div>
        <div class="max-w-[855px]">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 lg:gap-y-[80px] gap-x-[165px] ">

                <?php foreach($items as $item): ?>
                    <?php
                        // Tách phần trước và sau dấu ":"
                        $parts = explode(':', $item['content'], 2);
                        $before_colon = trim($parts[0] ?? '');
                        $after_colon = trim($parts[1] ?? '');
                    ?>
                    <div class="py-3 lg:py-5 flex flex-col lg:flex-row lg:space-x-5">
                        <div class="w-full text-[16px] lg:text-[20px]">
                            <?php if ($after_colon): ?>
                                <span class="font-bold"><?php echo $before_colon; ?>:</span> <?php echo $after_colon; ?>
                            <?php else: ?>
                                <?php echo $before_colon; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>