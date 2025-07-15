<?php
$title = $attributes['title'] ?? 'Open Positions';
$backgroundImage = $attributes['backgroundImage'] ?? '/assets/images/Group 62.png';
$imageUrl = esc_url(get_stylesheet_directory_uri() . $backgroundImage);
?>

<div class="py-[50px] relative min-h-[600px] overflow-hidden">
  <div class="container lg:pt-[50px] lg:pb-0 pb-[50px]">
    <div class="text-[32px] lg:text-[36px]">
      <?php echo esc_html($title); ?>
    </div>
  </div>

  <div class="hidden lg:block lg:absolute -top-[330px] right-0 w-[500px] h-[350px] translate-x-1/3 z-[-1]">
    <img src="<?php echo $imageUrl; ?>" alt="Background" />
  </div>

  <div class="z-10">
    <?php render_rocket_block('job'); ?>
  </div>
</div>
