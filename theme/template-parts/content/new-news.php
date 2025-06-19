<?php
$title = $args['title'] ?? '';
$category = $args['category'] ?? '';
?>

<div class=" py-[60px] lg:py-[120px]">
    <?php if ($title): ?>
        <h2 class="container text-[32px] lg:text-[40px] font-bold mb-[53px]"><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    
    <?php 
    echo render_rocket_block('list-post', [
        'attributes' => [
            'category' => $category,
        ]
    ]); 
    ?>
</div>