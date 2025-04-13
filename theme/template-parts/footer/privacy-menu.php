<?php $menu = get_menu_tree('privacy-menu'); ?>

<div class="lg:space-x-[50px] text-[16px] lg:flex">
    <div class="space-x-[50px] mb-9 lg:mb-0">
        <?php foreach ($menu as $item): ?>
        <a href="<?php echo $item['url'] ?>">
            <?php echo $item['title'] ?>
        </a>
        <?php endforeach; ?>
    </div>
    <span>Copyright © 2025 by Datum</span>
</div>