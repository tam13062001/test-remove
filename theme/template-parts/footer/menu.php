<?php $menu = get_menu_tree('footer-menu'); ?>

<div class="grid grid-cols-2 gap-4">
    <?php foreach ($menu as $item): ?>
        <a class="font-bold text-[16px]" href="<?php echo $item['url'] ?>">
            <?php echo $item['title'] ?>
        </a>
    <?php endforeach; ?>
</div>