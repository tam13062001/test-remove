<?php $primary_menu_items = get_menu_tree('primary-menu'); ?>
<?php 

$current_id = get_queried_object_id();


?>

<div class="hidden lg:flex font-bold">
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

    
    <div class="group relative">
    <a class="mx-4 hover:border-b-2 border-white <?php echo $is_active ? 'border-b-2 border-white' : ''; ?>" href="<?php echo $menu['url']; ?>">
            <?php echo $menu['title']; ?>
        </a>
        <?php if (!empty($menu['children'])) { ?>
            <ul class="absolute bottom-0 list-none z-20 w-max m-0 top-[25px] hidden group-hover:block">
                <?php foreach ($menu['children'] as $submenu) : ?>
                    <li class="relative group bg-secondary/10 hover:bg-secondary/20 border-b border-primary">
                        <a href="<?php echo $submenu['url'] ?>" class="block px-4 py-2 font-bold ">
                            <?php echo $submenu['title'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php } ?>
    </div>
    <?php endforeach; ?>
</div>
<div class="lg:hidden">
    <?php
    global $rocket;
    $logo_url = $rocket->helper->get_custom_logo_url();
    render_rocket_block('mobile-menu', array(
        'data' => array_values($primary_menu_items),
        'logo_url' => $logo_url
    ));

    ?>

</div>