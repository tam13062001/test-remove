<?php
$title = $args['title'] ?? 'Why Join Datum';
$heading = $args['heading'] ?? '';
$content = $args['content'] ?? '';
$items = $args['items'] ?? []; // 4 ô vuông bên phải
?>

<div class="bg-gradient-to-r from-secondary to-primary text-white">
  <div class="container flex flex-col gap-8 py-[40px] lg:py-[100px]">
    <!-- Left content -->
    <div>
      <h2 class="text-[32px] lg:text-[36px] ">
        <?php echo esc_html($title); ?>
      </h2>
      <div class="text-[16px] lg:text-[20px] mb-5">
        <?php echo $heading; ?>
      </div>
      <div class="text-[14px] lg:text-[18px] mb-10">
        <?php echo $content; ?>
      </div>
    </div>

    <!-- Right grid of 4 images -->
    <div class="grid grid-cols-2 gap-4">
      <?php foreach ($items as $item): ?>
        <div class="relative aspect-[1/1] overflow-hidden group">
          <img src="<?php echo esc_url($item['image'] ?? ''); ?>" alt="" class="object-cover w-full h-full transition duration-300 group-hover:scale-105" />
          <div class="p-10 absolute inset-0 bg-black/40 flex flex-col justify-between text-white">
            <h3 class="lg:w-4/5 text-[16px] lg:text-[36px] font-regular leading-snug">
              <?php echo esc_html($item['title']); ?>
            </h3>
            <?php if (!empty($item['description'])): ?>
              <p class="lg:text-[20px] mt-2 leading-snug">
                <?php echo esc_html($item['description']); ?>
              </p>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
