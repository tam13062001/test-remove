<?php

    $title = $attributes['title'] ?? 'Default Title';
    $heading = $attributes['heading'] ?? '';
    $cta_text = $attributes['cta_text'] ?? '';
    $cta_link = $attributes['cta_link'] ?? '#';
    $image_url = $attributes['image_url'] ?? '';
    $items = $attributes['items'] ?? [];

?>
    <div class="py-[40px] lg:py-0 lg:pt-[100px] relative">
        <div class="container">
            <div class="text-[36px] lg:mb-0">
                <div class="w-full mb-6 lg:mb-5 text-[24px] lg:text-[40px] font-bold">
                    <?php echo esc_html(datum_translate($title)); ?>
                </div>
                <div class="w-full lg:w-3/5 mb-6 lg:mb-5 text-[20px] lg:text-[32px] text-primary">
                    <?php echo esc_html(datum_translate($heading)); ?>
                </div>
                <div class="w-full lg:w-4/5 text-[20px] leading-[170%]">
                    <?php foreach($items as $item): ?>
    <div class="flex flex-col">
        <div class="py-4 w-full text-[20px] lg:text-[24px] font-bold">
            <?php echo esc_html(datum_translate($item['title']) ?? ''); ?>
        </div>
        <div class="py-4 lg:w-[785px] text-[16px] lg:text-[20px]">
            <?php if (!empty($item['isList'])):
                $lines = explode("\n", datum_translate($item['content']) ?? '');
                ?>
                <ul class="list-disc pl-6 space-y-1">
                    <?php foreach ($lines as $line): ?>
                        <li><?php echo esc_html(datum_translate(trim($line))); ?></li>
                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p><?php echo esc_html(datum_translate($item['content']) ?? ''); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>
                <?php if (!empty($cta_text)): ?>
                    <a href="<?php echo esc_url($cta_link); ?>" class="btn font-bold lg:w-fit w-full">
                        <?php echo esc_html($cta_text); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <?php if (!empty($image_url)): ?>
        <div class="absolute lg:h-[650px] bottom-0 lg:top-[0px] right-0 overflow-hidden lg:block hidden">
            <img class="h-full py-16 scale-150 lg:scale-100" src="<?php echo esc_url($image_url); ?>" alt="" />
        </div>
        <?php endif; ?>
    </div>

