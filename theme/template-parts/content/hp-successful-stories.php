<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<?php
$title = $args['title'] ?? 'Successful Stories';
$slides = $args['slides'] ?? [
    [
        'image_url' => get_stylesheet_directory_uri() . '/assets/images/hp-successful-stories.png',
        'title' => 'Digital Transformation for a Premier Banking Client',
        'description' => 'Datum Consulting helped the bank create a secure and efficient cloud system for easier digital banking.',
        'link' => '#',
        'link_text' => 'Read more'
    ],
    [
        'image_url' => get_stylesheet_directory_uri() . '/assets/images/slide-ss.jpg',
        'title' => 'EKS Workload Platform for Better Banking Experience',
        'description' => 'Datum delivered a resilient, secure, and automated EKS platform tailored for enterprise microservices.',
        'link' => '#',
        'link_text' => 'Read more'
    ]
];
?>

<div class="success-stories-block ">
    <h1 class="container text-2xl pt-[50px] lg:py-[100px] md:text-3xl lg:text-[40px] font-bold mb-8 lg:mb-[60px] px-4 lg:px-0">
        <?php echo $title; ?>
    </h1>

    <div class="relative mb-10 lg:mb-20">
        <!-- Mobile Slider -->
        <div class="block lg:hidden swiper-mobile">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $slide): ?>
                <div class="swiper-slide">
                    <!-- Image -->
                    <div class="w-full relative">
                        <img class="object-cover w-full" src="<?php echo $slide['image_url']; ?>" alt="Success Stories" />
                    </div>
                    
                    <!-- Content -->
                    <div class="w-full bg-white p-6 md:p-8 shadow-[0_0_10px_rgba(0,0,0,0.1)] -mt-4 mx-auto">
                        <h3 class="lg:text-[36px] text-[20px] text-primary font-Regular mb-4">
                            <?php echo $slide['title']; ?>
                        </h3>
                        <p class="lg:text-[20px] text-[16px] font-Regular mb-4">
                            <?php echo $slide['description']; ?>
                        </p>
                        <a href="<?php echo $slide['link']; ?>" class="text-primary lg:text-[20px] font-Regular inline-flex items-center font-mixed md:text-lg">
                            <?php echo $slide['link_text']; ?>
                            <span class="ml-1">
                                <i class="fa fa-chevron-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Mobile Navigation -->
            <div class="w-[130px] flex items-center justify-center gap-4 bg-white px-6 py-4 rounded-full shadow-md w-fit mx-auto absolute top-14 mt-24 ml-32 z-10">
                <div class="swiper-button-prev-mobile cursor-pointer">
                    <svg class="w-5 h-5 text-blue-600 hover:text-blue-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
                
                <div class="swiper-pagination-mobile flex items-center gap-2"></div>
                
                <div class="swiper-button-next-mobile cursor-pointer">
                    <svg class="w-5 h-5 text-blue-600 hover:text-blue-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Desktop Slider -->
<!-- Desktop Slider -->
<div class="hidden lg:block swiper-desktop relative">
    <div class="swiper-wrapper">
        <?php foreach ($slides as $slide): ?>
        <div class="swiper-slide">
            <div class="w-full relative">
                <!-- Background Image (Left Side) -->
                <div class="relative">
                    <img class="object-cover h-full w-full lg:w-3/5" src="<?php echo $slide['image_url']; ?>" alt="Success Stories" />
                </div>

                <!-- Content Container (Right Side) -->
                <div class="lg:absolute top-0 h-full w-full flex items-center">
                    <div class="w-full flex justify-end pl-10 lg:pl-0 pr-10">
                        <div class="w-full lg:w-3/5 bg-white p-5 lg:py-[70px] lg:px-[116px] shadow-[0_0_10px_rgba(0,0,0,0.1)]">
                            <h3 class="lg:text-[36px] text-primary font-Regular mb-6">
                                <?php echo $slide['title']; ?>
                            </h3>
                            <p class="text-[20px] font-Regular lg:text-[24px] mb-6">
                                <?php echo $slide['description']; ?>
                            </p>
                            <a href="<?php echo $slide['link']; ?>" class="text-primary inline-flex items-center font-mixed text-[20px] lg:text-[20px]">
                                <?php echo $slide['link_text'] ?? 'About Datum'; ?>
                                <span class="ml-1">
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- ✅ Di chuyển phần navigation/pagination ra khỏi .swiper-slide -->
    <div class="swiper-navigation-desktop absolute bottom-10 left-20 ml-80 mb-10 transform -translate-x-1/2 z-10">
        <div class="flex items-center justify-center gap-4 bg-white px-6 py-4 rounded-full shadow-md">
            <!-- Prev -->
            <div class="swiper-button-prev-desktop cursor-pointer">
                <svg class="w-5 h-5 text-blue-600 hover:text-blue-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </div>

            <!-- Dots -->
            <div class="swiper-pagination-desktop flex items-center gap-2"></div>

            <!-- Next -->
            <div class="swiper-button-next-desktop cursor-pointer">
                <svg class="w-5 h-5 text-blue-600 hover:text-blue-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </div>
    </div>
</div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Slider
    const mobileSlider = new Swiper('.swiper-mobile', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next-mobile',
            prevEl: '.swiper-button-prev-mobile',
        },
        pagination: {
            el: '.swiper-pagination-mobile',
            clickable: true,
            renderBullet: function (index, className) {
                const isActive = index === this.realIndex;
                return `<span class="${className} w-3 h-3 rounded-full ${isActive ? 'bg-blue-600' : 'bg-gray-300'}"></span>`;
            },
        },
    });

    // Desktop Slider
    const desktopSlider = new Swiper('.swiper-desktop', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next-desktop',
            prevEl: '.swiper-button-prev-desktop',
        },
        pagination: {
            el: '.swiper-pagination-desktop',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet',
            bulletActiveClass: 'swiper-pagination-bullet-active',
        },
    });


});
</script>