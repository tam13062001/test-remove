<?php
    $title = $attributes['title'] ?? '';
    $btn_text = $attributes['btn_text'] ?? '';
    $btn_url = $attributes['btn_url'] ?? '#';
    $content = $attributes['content'] ?? '';
    $user_name = $attributes['user_name'] ?? 'Nick Do';
    $user_title = $attributes['user_title'] ?? 'Co-founder';
    $user_avatar_url = $attributes['user_avatar_url'] ?? get_assets_from_path('images/our_team_2.jpg');
?>
    <div class="container py-8 lg:py-[80px]">
        <h2 class="font-[700] text-[32px] lg:text-[40px] mb-10 lg:mb-[50px]">
            <?php echo datum_translate($title); ?>
        </h2>
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/4">
                <img class="w-full lg:w-fit" src="<?php echo esc_url($user_avatar_url); ?>" alt="<?php echo esc_attr($user_name); ?>" />
            </div>
            <div class="lg:w-3/4 py-5 lg:py-[75px] lg:px-[135px]">
                <div class="text-primary font-[700] text-[20px] lg:text-[24px] mb-11">
                    <?php echo datum_translate($content); ?>
                </div>
                <a class="btn font-bold lg:w-fit w-full" href="<?php echo esc_url($btn_url); ?>">
                    <?php echo datum_get_translation($btn_text); ?>
                </a>
                <div class="mt-11">
                    <div class="text-primary font-[700] text-[20px] lg:text-[24px]">
                        <?php echo esc_html($user_name); ?>
                    </div>
                    <div class="text-[14px] lg:text-[20px]"><?php echo esc_html($user_title); ?></div>
                </div>
            </div>
        </div>
    </div>
