<header id="header" class="fixed w-full z-[100] top-0">
    <div class="container">
        <div class="flex md:pt-2 lg:mt-[37px] mt-[40px] lg:pb-[15px] pb-[8px] items-center justify-between text-[16px] md:mt-[45px]">
            <a class="main-logo" href="/">
                <?php get_template_part('template-parts/content/logo'); ?>
            </a>
            <a class="alternative-logo hidden" href="/">
                <img class="lg:w-[140px] w-[100px] mt-2" src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png' ?>" alt="Logo" />
            </a>
            <?php get_template_part('template-parts/header/menu'); ?>
            <?php get_template_part('template-parts/content/language-switcher'); ?>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function setupHeader() {
            const header = document.getElementById('header')
            if (!header) return
            if (window.scrollY > 10) {
                header.classList.add('has-background')
            } else {
                header.classList.remove('has-background')
            }
        }
        setupHeader()
        window.addEventListener('scroll', setupHeader);
    })
</script>
