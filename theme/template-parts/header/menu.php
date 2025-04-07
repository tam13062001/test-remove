
<?php $primary_menu_items = get_menu_tree('primary-menu'); ?>

<div class="hidden lg:flex font-bold">
    <?php foreach ($primary_menu_items as $menu) : ?>
        <div class="group relative">
            <a class="px-4" href="<?php echo $menu['url'];?>">
                <?php echo $menu['title']; ?>
            </a>
            <?php if (!empty($menu['children'])) { ?>
                <ul class="absolute bottom-0 list-none z-20 w-max m-0 top-[25px] hidden group-hover:block">
                    <?php foreach ($menu['children'] as $submenu) : ?>
                        <li class="relative group  bg-secondary hover:bg-secondary/80">
                            <a href="<?php echo $submenu['url'] ?>" class="block px-4 py-2 font-bold">
                                <?php echo $submenu['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php } ?>
        </div>
    <?php endforeach; ?>


</div>