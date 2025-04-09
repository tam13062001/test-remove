<?php
$title = $args['title'] ?? '';
$btn_text = $args['btn_text'] ?? '';
$btn_url = $args['btn_url'] ?? '#';
$content = $args['content'] ?? '';
$user_name = $args['user_name'] ?? 'Nick Do';
$user_title = $args['user_title'] ?? 'Co-founder';
$user_avatar_url = $args['user_avatar_url'] ?? get_assets_from_path('images/user-1.png')
?>

<div class="container py-8 lg:py-[50px]">
    <h2 class="font-[700] text-[32px] lg:text-[40px] mb-10 lg:mb-[110px]">
        <?php echo $title ?>
    </h2>
    <div class="flex flex-col lg:flex-row">
        <div class="lg:w-1/4">
            <img class="w-full lg:w-fit" src="<?php echo $user_avatar_url ?>" />
        </div>
        <div class="lg:w-3/4 py-5 lg:py-[75px] lg:px-[135px]">
            <div class="text-primary font-[700] text-[20px] lg:text-[24px] mb-11">
                <?php echo $content ?>
            </div>
            <a class="btn font-bold" href="<?php echo $btn_url ?>">
                <?php echo $btn_text ?>
            </a>
            <div class="mt-11">
                <div class="text-primary font-[700] text-[20px] lg:text-[24px]">
                    <?php echo $user_name ?>
                </div>
                <div class="text-[14px] lg:text-[20px]"><?php echo $user_title ?></div>
            </div>
        </div>
    </div>
</div>
