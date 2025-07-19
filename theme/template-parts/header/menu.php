<?php $primary_menu_items = get_menu_tree('primary-menu'); ?>
<?php

$current_id = get_queried_object_id();


?>

<div class="hidden ipadpro:hidden lg:flex font-bold mt-2">
    <?php foreach ($primary_menu_items as $menu) : ?>

        <?php
        $menu_post_id = url_to_postid($menu['url']);
        $is_active = false;
        if ($menu_post_id) {
            // Nếu chính nó là trang hiện tại
            if ($current_id === $menu_post_id) {
                $is_active = true;
            }

            // Nếu menu là cha của trang hiện tại
            $ancestors = get_post_ancestors($current_id);
            if (in_array($menu_post_id, $ancestors)) {
                $is_active = true;
            }

            // Nếu trang hiện tại là con của menu này
            if (!empty($menu['children'])) {
                foreach ($menu['children'] as $submenu) {
                    $submenu_post_id = url_to_postid($submenu['url']);
                    if ($current_id === $submenu_post_id) {
                        $is_active = true;
                        break;
                    }
                }
            }
        }
        ?>


        <div class="menu group relative">
            <?php if (!empty($menu['children'])): ?>
                <span class="2xl:mx-4 lg:mx-4 hover:border-b-2 cursor-pointer <?php echo $is_active ? 'active' : ''; ?>">
                    <?php echo datum_get_translation($menu['title']); ?>
                </span>
                <ul class="absolute h-fit bottom-0 list-none z-20 w-max m-0 top-[25px] hidden group-hover:block pt-2">
                    <?php foreach ($menu['children'] as $submenu) : ?>
                        <li class="relative group bg-secondary/10 hover:bg-secondary/20 border-b border-primary">
                            <a href="<?php echo $submenu['url'] ?>" class="block px-4 py-2 font-bold ">
                                <?php echo datum_get_translation($submenu['title']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <a class="2xl:mx-4 lg:mx-2 hover:border-b-2 <?php echo $is_active ? 'active' : ''; ?>" href="<?php echo $menu['url']; ?>">
                    <?php echo datum_get_translation($menu['title']); ?>
                </a>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<?php function translate_menu_items($items) {
    foreach ($items as &$item) {
        $item['title'] = datum_get_translation($item['title']);
        if (!empty($item['children'])) {
            $item['children'] = translate_menu_items($item['children']);
        }
    }
    return $items;
}

$translated_menu_items = translate_menu_items($primary_menu_items);
 ?>
<div class="lg:hidden ipadpro:block">
    <?php
    global $rocket;
    $logo_url = $rocket->helper->get_custom_logo_url();
    render_rocket_block('mobile-menu', array(
    'data' => array_values($translated_menu_items),
    'logo_url_2' => get_stylesheet_directory_uri().'/assets/images/logo.png',
));

    ?>

</div>