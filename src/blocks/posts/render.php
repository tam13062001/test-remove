<?php
$title = $attributes['title'] ?? 'Latest News & Events';
$categories = $attributes['categories'] ?? [];

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = [
    'post_type' => 'post',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'ASC',
    'category_name' => implode(',', $categories),
    'paged' => $paged,
];

$query = new WP_Query($args);
?>

<div class="py-[90px]">
    <div class="container mx-auto">
        <h2 class="text-[32px] lg:text-[36px]"><?php echo esc_html($title); ?></h2>
    </div>

    <?php if ($query->have_posts()) : ?>
        <div class="container mx-auto pt-8 lg:pt-[110px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-10">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php
                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (!$image_url) {
                        $image_url = get_assets_from_path('images/default_post_thumbnail.jpg');
                    }
                    ?>
                    <div class="border-b border-secondary">
                        <!-- Post content -->
                        <div class="flex flex-col lg:justify-between lg:py-12 py-4 lg:px-8 px-5 lg:text-[24px] text-[16px] font-[700] text-primary bg-gradient-to-r from-secondary/20 to-primary/20 h-[140px] lg:h-[220px]">
                            <div class="text-[14px] lg:text-[24px] font-bold text-primary mb-4 lg:mb-0">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="flex justify-start">
                                <p class="text-black text-[14px] lg:text-[16px] font-bold">
                                    <?php echo get_the_date('j, F, Y'); ?>
                                </p>
                            </div>
                        </div>

                        <!-- Thumbnail -->
                        <div class="lg:h-[333px] h-auto flex items-center justify-center">
                            <img class="h-auto lg:h-[333px] w-full object-cover" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" />
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination container mx-auto">
            <?php
            echo paginate_links([
                'total'     => $query->max_num_pages,
                'current'   => $paged,
                'base'      => add_query_arg('paged', '%#%'),
                'format'    => '',
                'prev_text' => '<svg viewBox="64 64 896 896" focusable="false" data-icon="arrow-left" width="1em" height="1em" fill="currentColor"><path d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 000-48.4z"></path></svg>',
                'next_text' => '<svg viewBox="64 64 896 896" focusable="false" data-icon="arrow-right" width="1em" height="1em" fill="currentColor"><path d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 000-48.4z"></path></svg>',
            ]);
            ?>
        </div>
    <?php else : ?>
        <div class="container mx-auto py-10">
            <p class="text-gray-500">Không có bài viết nào trong category đã chọn.</p>
        </div>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</div>
