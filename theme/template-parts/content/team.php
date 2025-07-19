<?php
$title = $args['title'] ?? '';
$btn_text = $args['btn_text'] ?? '';
$btn_url = $args['btn_url'] ?? '#';
$content = $args['content'] ?? '';
$user_name = $args['user_name'] ?? 'Nick Do';
$user_title = $args['user_title'] ?? 'Co-founder';
$user_avatar_url = $args['user_avatar_url'] ?? get_assets_from_path('images/our_team_2.jpg')
?>

<div class="container py-8 lg:py-[80px]">
    <h2 class="font-[700] text-[32px] lg:text-[40px] mb-10 lg:mb-[50px]">
        <?php echo datum_translate($title) ?>
    </h2>
    <div class="flex flex-col lg:flex-row">
        <div class="lg:w-1/4">
            <img class="w-auto h-auto " src="<?php echo $user_avatar_url ?>" />
        </div>
        <div class="lg:w-3/4 py-5  lg:px-[135px]">
            <div class="text-primary font-[700] text-[20px] lg:text-[24px] mb-11">
                <?php echo datum_translate($content) ?>
            </div>
            <a class="btn font-bold lg:w-fit w-full" href="/contact/">
                <?php echo datum_translate($btn_text) ?>
            </a>
            <div class="mt-11">
                <div class="text-primary font-[700] text-[20px] lg:text-[24px]">
                    <?php echo datum_translate('team_section.name') ?>
                </div>
                <div class="text-[14px] lg:text-[20px]"><?php echo datum_translate('team_section.position') ?></div>
            </div>
        </div>
    </div>
</div>
