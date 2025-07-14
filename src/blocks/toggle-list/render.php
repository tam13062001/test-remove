<?php
/**
 * File: render.php
 * Description: Render dynamic block Toggle List with HTML content
 */

$title = $attributes['title'] ?? '';
$items = $attributes['items'] ?? [];

if (empty($items)) return;
?>

<div class="relative py-[40px] lg:py-[100px] datum-toggle-list">
  <div class="container">
    <?php if (!empty($title)) : ?>
      <h2 class="font-[700] text-[32px] lg:text-[40px] mb-5 lg:mb-[50px]">
        <?php echo esc_html($title); ?>
      </h2>
    <?php endif; ?>
    <div class="[&>:not(:last-child)]:border-b">
      <?php foreach ($items as $index => $item) : ?>
        <div class="border-primary py-6 lg:py-[50px] flex flex-col lg:flex-row lg:space-x-5">
          <div class="text-primary lg:w-2/5 text-[20px] lg:text-[36px] flex justify-between items-start cursor-pointer lg:cursor-auto"
            onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('svg').classList.toggle('rotate-45')">
            <div><?php echo wp_kses_post($item['title'] ?? ''); ?></div>
            <div class="flex lg:hidden items-center mt-2">
              <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-200">
                <path d="M5.44 11.14V7.2H1.5V5.94H5.44V2H6.7V5.94H10.63V7.2H6.7V11.14H5.44Z" fill="#315CD4" />
              </svg>
            </div>
          </div>
          <div class="lg:w-3/5 mt-3 text-[16px] lg:text-[20px] hidden lg:block">
            <?php echo wp_kses_post($item['content'] ?? ''); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>