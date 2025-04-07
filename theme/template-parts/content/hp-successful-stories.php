<?php
$title = $args['title'] ?? 'Successful Stories';
$content = $args['content'] ?? 'Default Content';
$image_url = $args['image_url'] ?? get_stylesheet_directory_uri() . '/assets/images/hp-successful-stories.png';
$bg_image_url = $args['bg_image_url'] ?? '';
?>

<h1 class=" container text-[40px] font-bold text-gray-900 px-4 lg:px-0">
            <?php echo $title; ?>
        </h1>

<div class="relative lg:min-h-[880px] mb-20">
    <!-- Background Image (Left Side) -->
    <div class=" lg:absolute left-0 top-0 h-full overflow-hidden mt-28">
        <img class="object-cover h-[554px] w-[947px] " src="<?php echo $image_url; ?>" alt="Success Stories" />
    </div>

    <!-- Content Container (Right Side) -->
    <div class="  lg:py-[100px] z-10 relative lg:ml-auto lg:w-[65%]">
        
    
        <div class=" px-4 lg:px-0 mt-28 ml-24 mr-8">
            
        <div class="w-full flex justify-end h-auto xl:h-[400px]">
                <div class="w-full xl:w-2/3 bg-white p-8 shadow-lg ">
                    <h3 class="text-2xl text-[36px] font-Regular text-[#315CD4] mb-4 mt-4 ml-16 mb-8">
                    Digital Transformation for a Premier Banking Client
                    </h3>
                    <p class="text-gray-600 text-[24px] font-Regular mb-6 ml-16  ">
                    Datum Consulting helped the bank create a secure and efficient cloud system for easier digital banking.
                    </p>
                    <a href="#" class="text-[#315CD4] mt-20  inline-flex items-center font-mixed text-[20px] ml-16 ">
                        About Datum  
                        <span class="ml-1">></span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>