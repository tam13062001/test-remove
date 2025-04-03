<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>

<div class="h-[824px] relative">
    <img class="object-cover h-full w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img.png'  ?>" />
    <div class="absolute top-1/2 -translate-y-1/2 z-10 font-[700] text-white text-[72px] leading-[120%]">
        <div class="ml-[128px]">
            <div>Pioneering</div>
            <div>the Future of</div>
            <div style="color: #0DC0E2;">Digital Innovation</div>
        </div>
    </div>
</div>

<div class="container py-[100px]">
    <div class="grid grid-cols-2">
        <div class="text-[36px]">
            <div class="mb-12">
                Datum is your trusted partner in digital transformation, seamlessly integrating Cloud
                Solutions, Software Engineering, and Data & AI to help businesses scale, innovate,
                and stay ahead.
            </div>
            <button>
                Schedule a consultation with our expert
            </button>
        </div>
        <div class="flex justify-center">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_1.png'  ?>" />
        </div>
    </div>
</div>

<!-- TODO Complete rest code of homepage -->


<div class="container py-[100px]">
  <div class=" mx-auto">

    <h1 class="text-4xl md:text-5xl font-bold text-start text-gray-900 mb-16">
      What Sets Us Apart
    </h1>
    
    <!-- Features Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
      <!-- Data & AI Card -->
      <div class="bg-white p-3 rounded-lg  ">
        <img class="w-[363px] h-[224]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_2.png'  ?>" alt="Logo" />
        <h2 class="text-2xl font-bold mb-4 mt-4" style="color : #315CD4">Data & AI</h2>
        <p class="text-gray-600">
          Unlock the full potential of your data with AI-driven insights. We transform raw data into intelligent strategies, enabling smarter decision-making and competitive advantage.
        </p>
      </div>
      
      <!-- Cloud Solutions Card -->
      <div class="bg-white p-3 rounded-lg ">
        <img class="w-[363px] h-[224]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_3.png'  ?>" alt="Logo" />
        <h2 class="text-2xl font-bold mb-4 mt-4" style="color : #315CD4">Cloud Solutions</h2>
        <p class="text-gray-600">
          Build a scalable and resilient cloud ecosystem tailored to your needs. We help businesses optimize their cloud infrastructure, enhance security, and drive operational efficiency.
        </p>
      </div>
      
      <!-- Software Engineering Card -->
      <div class="bg-white p-3 rounded-lg ">
        <img class="w-[363px] h-[224]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_4.png'  ?>" alt="Logo" />
        <h2 class="text-2xl font-bold mb-4 mt-4" style="color : #315CD4">Software Engineering</h2>
        <p class="text-gray-600 ">
          Elevate your business with future-ready software solutions. From custom application development to enterprise systems, we craft intuitive and powerful software that accelerates growth.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container relative py-[100px] flex items-center">
    <!-- Tiêu đề + Bảng thông tin -->
    <div class="w-1/2 relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold text-start text-gray-900 mb-16">
            Why Datum
        </h1>

        <!-- Bảng thông tin (ghi đè lên ảnh) -->
        <div class="absolute top-[100px] left-0 bg-white bg-opacity-80 shadow-lg p-6 rounded-lg w-[400px]">
            <h2 class="text-xl font-semibold text-gray-900">Thông tin quan trọng</h2>
            <p class="text-gray-700 mt-2">Đây là nội dung của bảng thông tin sẽ ghi đè lên hình ảnh.</p>
        </div>
    </div>

    <!-- Hình ảnh luôn bên phải nhưng không tràn xuống footer -->
    <div class="flex justify-end">
        <img class="w-[825px] h-[714]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image_5.png' ?>" />
    </div>
</div>





<?php get_footer(); ?>
