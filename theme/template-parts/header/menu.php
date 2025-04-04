<!-- TODO load dynamic from config -->
<?php $primary_menu_items = get_menu_tree('primary-menu'); ?>

<div class="hidden lg:flex font-bold">
    <?php
    foreach ($primary_menu_items as $menu) {
        $has_children = !empty($menu['children']);
    ?>
        <div class="menu-nav-item relative">
            <a class="px-4" href="<?php echo $menu['url'];?>">
                <?php echo $menu['title']; ?>
            </a>
        </div>
    <?php } ?>

<!--    <div class="px-4">-->
<!--        <div class="border-b-2 border-white">-->
<!--            Our services-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="px-4">Our solutions</div>-->
<!--    <div class="px-4">Industry</div>-->
<!--    <div class="px-4">Insights</div>-->
<!--    <div class="px-4">Successful stories</div>-->
<!--    <div class="px-4">About us</div>-->
<!--    <div class="px-4">Career</div>-->
</div>