<?php
$title = $args['title'] ?? 'We specialize in';
$heading = $args['heading'] ?? '';
$content = $args['content'] ?? '';
$items = $args['items'] ?? [];
?>

<div class="py-[40px]">
  <div class="container flex flex-col gap-8 pb-[40px] lg:pb-[100px]">
    <!-- Left content -->
    <div>
      <h2 class="text-[32px] lg:text-[20px] font-bold text-[#315CD4]">
        <?php echo esc_html($title); ?>
      </h2>
      <div class="text-[16px] lg:text-[20px] mb-5">
        <?php echo $heading; ?>
      </div>
      <div class="text-[14px] lg:text-[18px] mb-10">
        <?php echo $content; ?>
      </div>
    </div>

<div class="grid grid-cols-2 gap-4">
  <?php foreach ($items as $item): ?>
    <div class="relative h-[300px]  w-full aspect-[4/3] overflow-hidden group ">
      <div class="container absolute inset-0 bg-[#315CD4] py-14 flex flex-col  text-white">
        <h3 class="text-[16px] lg:text-[20px] font-semibold leading-snug">
          <?php echo esc_html($item['title']); ?>
        </h3>
        <?php if (!empty($item['description'])): ?>
          <p class="text-[13px] lg:text-[20px] mt-2 leading-snug">
            <?php echo esc_html($item['description']); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
  </div>
</div>
