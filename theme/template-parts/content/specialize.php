<?php
$title = $args['title'] ?? 'We specialize in';
$heading = $args['heading'] ?? '';
$content = $args['content'] ?? '';
$items = $args['items'] ?? [];
?>

<div class="lg:py-[40px]">
  <div class="container flex flex-col gap-8 pb-[40px] lg:pb-[100px]">
  
    <div>
      <h2 class="text-[20px] font-bold text-[#315CD4]">
        <?php echo esc_html($title); ?>
      </h2>
    </div>

    
<div class="grid lg:grid-cols-2 grid-cols-1 gap-4 items-stretch">
  <?php foreach ($items as $item): ?>
    <div class="h-full w-full overflow-hidden group flex flex-col">
      <div class="inset-0 bg-[#315CD4] lg:py-14 py-8 lg:px-0 px-6 flex flex-col text-white h-full">
        <h3 class="lg:px-16 px-0 text-[16px] lg:text-[20px] font-semibold leading-[170%]">
          <?php echo esc_html($item['title']); ?>
        </h3>
        <?php if (!empty($item['description'])): ?>
          <p class="lg:px-16 px-0 text-[13px] lg:text-[20px] mt-2 leading-[170%]">
            <?php echo esc_html($item['description']); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
  </div>
</div>
