<?php 
$is_404 = is_404(); 
$lang = $_COOKIE['datum_lang'] ?? 'en';
$path = get_stylesheet_directory() . "/languages/{$lang}.json";
$translations = [];
if (file_exists($path)) {
    $translations = json_decode(file_get_contents($path), true);
}
$json = file_exists($path) ? file_get_contents($path) : '{}';
?>
<header id="header" class="fixed w-full z-[100] <?php echo is_user_logged_in() ? 'top-8' : 'top-0'; ?><?php if ($is_404) echo ' has-background'; ?>">
    <div class="">
        <div class="flex items-center justify-between md:pt-2 lg:pb-[15px] pb-[8px] lg:text-[16px] ">
            <a class="main-logo lg:mx-20 mx-8" href="/">
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
    window.translations = <?php echo json_encode($translations, JSON_UNESCAPED_UNICODE); ?>;
    document.addEventListener('DOMContentLoaded', function () {
        function setupHeader() {
            const header = document.getElementById('header')
            if (!header) return
            <?php if ($is_404): ?>
                header.classList.add('has-background');
                return;
            <?php endif; ?>
            if (window.scrollY > 10) {
                header.classList.add('has-background')
            } else {
                header.classList.remove('has-background')
            }
        }
        setupHeader()
        window.addEventListener('scroll', setupHeader);
        window.IS_404 = <?php echo $is_404 ? 'true' : 'false'; ?>;
    })
</script>
