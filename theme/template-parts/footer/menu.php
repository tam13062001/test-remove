<?php $menu = get_menu_tree('footer-menu'); ?>

<?php $columns = get_menu_columns('footer-menu'); ?>

<div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-black text-[16px] font-semibold lg:pb-[50px]">
    <?php foreach ($columns as $col): ?>
        <div>
            <h4 class="text-black uppercase text-sm font-medium mb-4">
                <?php echo esc_html($col['title']); ?>
            </h4>
            <ul class="space-y-5 font-bold text-[12px]">
                <?php foreach ($col['children'] as $item): ?>
                    <li>
                        <a href="<?php echo esc_url($item['url']); ?>" class=" hover:underline font-bold text-[16px] font-weight-[600]">
                            <?php echo esc_html($item['title']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>