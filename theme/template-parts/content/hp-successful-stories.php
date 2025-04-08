<?php
$title = $args['title'] ?? 'Successful Stories';
$content = $args['content'] ?? 'Default Content';
$image_url = $args['image_url'] ?? get_stylesheet_directory_uri() . '/assets/images/hp-successful-stories.png';
$bg_image_url = $args['bg_image_url'] ?? '';
?>

<div class="">

    <h1 class="container text-[32px] lg:text-[40px] font-bold mb-[20px]">
        <?php echo $title; ?>
    </h1>

    <div class="relative lg:mb-20">
        <!-- Background Image (Left Side) -->
        <div class="w-full relative">
            <img class="object-cover h-full w-full lg:w-3/5" src="<?php echo $image_url; ?>" alt="Success Stories" />
            <!-- Content Container (Right Side) -->
            <div class="lg:absolute top-0 h-full w-full flex items-center">
                <div class="w-full flex justify-end pl-10 lg:pl-0 pr-10">
                    <div class="w-full lg:w-3/5 bg-white p-5 lg:py-[70px] lg:px-[116px] shadow-lg">
                        <h3 class="lg:text-[36px] text-primary mb-4">
                            Digital Transformation for a Premier Banking Client
                        </h3>
                        <p class="text-[16px] lg:text-[24px] mb-6">
                            Datum Consulting helped the bank create a secure and efficient cloud system for easier digital banking.
                        </p>
                        <a href="#" class="text-primary inline-flex items-center font-mixed text-[16px] lg:text-[20px]">
                            About Datum
                            <span class="ml-1">
                            <i class="fa fa-chevron-right"></i>
                        </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>

