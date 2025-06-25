<?php get_header() ?>

<?php
$categories = get_the_category();
$category_name = null;
$breadcrumbs = array('Insights');
if (!empty($categories)) {
    $breadcrumbs[] = $categories[0]->name;
}
get_template_part('template-parts/content/banner', null, array(
    'title' => get_the_title(),
    'background_image' => get_assets_from_path('images/Datum-Knowledge-1.jpg'),
    'breadcrumbs' => $breadcrumbs,
));
?>
<div class=" py-[50px] relative min-h-[600px] overflow-hidden">
    <div class="hidden lg:block lg:absolute top-20 right-0 w-[500px] h-[350px] translate-x-1/3 z-[-1]">
        <img class="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/Group 62.png' ?>" />
    </div>
    <div class="container mx-auto relative z-10">
        <div class="font-bold mb-4">
    <?php
    $date = new DateTime(get_the_date('Y-m-d'));
    echo $date->format('j, F, Y');
    ?>
</div>

        <div class="prose !max-w-none mb-10 lg:mb-[120px]">
            <?php the_content(); ?>
        </div>
        <div class="mb-4">
            <div class="font-bold mb-4">About the Author</div>
            <?php
            $post_id = get_the_ID();
            $author_id = get_post_field('post_author', $post_id);
            $display_name = get_the_author_meta('nickname', $author_id);
            $bio = get_the_author_meta('user_description', $author_id);
            $user_title = get_the_author_meta('user_title', $author_id);
            ?>
            <div>
                <div class="mb-10">
                    <div class="text-primary">
                        Nick Do
                    </div>
                    <div>
                        Co-founder
                    </div>
                </div>

                <div class="text-primary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
                </div>
            </div>
        </div>
    </div>
    <?php
    $recommended_posts = get_posts(array(
        'numberposts' => 2,
        'post_status' => 'publish',
        'post_type' => 'post',
        'orderby' => 'rand',
        'post__not_in' => array($post->ID)
    ));
    get_template_part('template-parts/content/late-new-event', null, array(
        'title' => 'You might want to read',
        'news_items' => $recommended_posts
    ));
    ?>
</div>
<?php get_template_part('template-parts/content/back-to-top'); ?>
<?php get_footer() ?>
