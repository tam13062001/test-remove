<?php
    $title = $attributes['title'] ?? '';
    $items = $attributes['items'] ?? [];
?>
    <div class="lg:py-[40px]">
        <div class="container pb-[40px] lg:pb-[100px]">
            <div>
                <h2 class="text-[20px] font-bold text-[#315CD4] pb-[50px]">
                    <?php echo esc_html($title); ?>
                </h2>
            </div>

            <div class="lg:flex grid grid-cols-1 justify-between gap-4">
                <?php foreach (array_chunk($items, ceil(count($items) / 2)) as $columnItems): ?>
                    <div class="h-full w-full grid grid-cols-1 gap-4">
                        <?php foreach ($columnItems as $item): ?>
                            <div class="w-full overflow-hidden group flex flex-col h-auto min-h-[280px] lg:min-h-[320px]">
                                <div class="inset-0 bg-[#315CD4] lg:py-14 py-8 lg:px-0 px-6 flex flex-col text-white h-full">
                                    <h3 class="lg:px-16 px-0 text-[16px] lg:text-[20px] font-semibold leading-[170%]">
                                        <?php echo esc_html($item['title'] ?? ''); ?>
                                    </h3>

                                    <?php if (!empty($item['isList'])):
                                        $lines = explode("\n", $item['description']);
                                        ?>
                                        <ul class="lg:px-16 px-0 text-[13px] lg:text-[20px] mt-2 leading-[170%] list-disc">
                                            <?php foreach ($lines as $line): ?>
                                                <li class="relative lg:pl-4"> <?php echo esc_html(trim($line)); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <p class="lg:px-16 px-0 text-[13px] lg:text-[20px] mt-2 leading-[170%]">
                                            <?php echo esc_html($item['description'] ?? ''); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
