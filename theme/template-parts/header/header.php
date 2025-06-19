<header 
  id="main-header" 
  class="sticky top-0 z-[100] w-full lg:-mt-[110px] -mt-[160px] transition-all duration-300 bg-transparent"
>
  <div class="container lg:mt-0 mt-[50px]">   
    <div class="flex lg:pt-[30px] lg:pb-[20px] pb-[15px] items-center justify-between text-[16px]">
      <a class="mt-[10px]" href="/">
        <!-- Logo trắng (dùng khi chưa scroll) -->
        <img id="logo-white" class="lg:w-[140px] w-[100px] mt-2 block" src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo_white.png' ?>" alt="Logo trắng" />
        
        <!-- Logo gốc (dùng khi scroll) -->
        <img id="logo-default" class="lg:w-[140px] w-[100px] mt-2 hidden" src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png' ?>" alt="Logo gốc" />
      </a>
      <div class="mt-[18px]">
        <?php get_template_part('template-parts/header/menu'); ?>
        <?php get_template_part('template-parts/content/language-switcher'); ?>
      </div>
    </div>
  </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('main-header');
    const logoWhite = document.getElementById('logo-white');
    const logoDefault = document.getElementById('logo-default');
    const submenus = document.querySelectorAll('.submenu');

    function updateHeader() {
    if (window.scrollY > 50) {
        header.classList.add('bg-white', 'text-black', 'shadow-lg');
        header.classList.remove('bg-transparent', 'text-white');
        
        // Update submenu background when sticky
        document.querySelectorAll('.submenu').forEach(submenu => {
            submenu.classList.add('bg-white', 'shadow-lg');
            submenu.classList.remove('bg-transparent');
        });
        
        // Update submenu items text color
        document.querySelectorAll('.submenu li').forEach(item => {
            item.classList.remove('text-white');
            item.classList.add('text-black');
        });

        logoWhite.classList.add('hidden');
        logoDefault.classList.remove('hidden');
    } else {
        header.classList.add('bg-transparent', 'text-white');
        header.classList.remove('bg-white', 'text-black', 'shadow-lg');
        
        // Update submenu background when not sticky
        document.querySelectorAll('.submenu').forEach(submenu => {
            submenu.classList.add('bg-transparent');
            submenu.classList.remove('bg-white', 'shadow-lg');
        });
        
        // Update submenu items text color
        document.querySelectorAll('.submenu li').forEach(item => {
            item.classList.add('text-white');
            item.classList.remove('text-black');
        });

        logoWhite.classList.remove('hidden');
        logoDefault.classList.add('hidden');
    }
}

    window.addEventListener('scroll', updateHeader);
    updateHeader();
});
</script>
