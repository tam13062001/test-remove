<?php $menu = get_menu_tree('footer-menu'); ?>

<<<<<<< Updated upstream
<div class="grid grid-cols-2 gap-4 text-gray-800">
    <?php foreach ($menu as $item): ?>
        <a href="<?php echo $item['url']; ?>" class="font-bold text-[16px] mx-4">
=======
<div class="grid grid-cols-2 gap-4 text-gray-800 font-[700] mb-4">
    <?php foreach ($menu as $item): ?>
        <a href="<?php echo $item['url']; ?>" class="block font-bold text-[16px]">
>>>>>>> Stashed changes
            <span class="inline-block hover:border-b-2 hover:border-black transition duration-200">
                <?php echo $item['title']; ?>
            </span>
        </a>
    <?php endforeach; ?>
</div>
