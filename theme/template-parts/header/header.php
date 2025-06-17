<header 
  id="main-header" 
  class="sticky top-0 z-[100] w-full lg:-mt-[110px] transition-all duration-300 bg-transparent"
>
  <div class="container ">
    <div class="flex py-[32px] items-center justify-between text-[16px]">
      <a href="/">
        <?php get_template_part('template-parts/content/logo'); ?>
      </a>
      <?php get_template_part('template-parts/header/menu'); ?>
      <?php get_template_part('template-parts/content/language-switcher'); ?>
    </div>
  </div>
</header>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('main-header');
    function updateHeader() {
      if (window.scrollY > 50) {
        header.classList.add('bg-white', 'text-black', 'shadow-lg');
        header.classList.remove('bg-transparent', 'text-white');
      } else {
        header.classList.add('bg-transparent', 'text-white');
        header.classList.remove('bg-white', 'text-black', 'shadow-lg');
      }
    }
    window.addEventListener('scroll', updateHeader);
    updateHeader(); // Gọi ngay khi load trang
  });
</script>

