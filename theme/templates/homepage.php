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

<!-- What Sets Us Apart -->
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

<!--  Game-Changing Solutions -->

<div class="container py-[100px]">
  <h2 class="text-4xl font-bold text-gray-900 mb-12">
    Game-Changing Solutions
  </h2>

  <div class="space-y-2 lg:space-y-20">
    <!-- Platform Engineering -->
      <div class="w-full flex h-[453px]">
          <div class="lg:w-2/3 bg-white p-10 rounded-lg shadow-lg">
              <!-- Title -->
              <h3 class="text-2xl font-bold text-[#315CD4] mb-4">
                  Platform Engineering
              </h3>

              <!-- Description -->
              <p class="text-gray-600 mb-6 leading-relaxed">
                  Build a strong digital foundation with scalable and
                  agile infrastructure solutions.
              </p>

              <!-- Learn More Link -->
              <a href="#" class=" text-[#0DC0E2]  mt-12">
                  Learn more
                  <span class="ml-1 transform translate-y-px">></span>
              </a>
          </div>
      </div>
      <!-- Digital Transformation -->
    <div class="w-full flex lg:justify-end h-[453px]">
        <div class="lg:w-2/3 bg-white p-10 rounded-lg shadow-lg ml-1/2">
            <!-- Title -->
            <h3 class="text-2xl font-bold text-[#315CD4] mb-4">
                Digital Transformation
            </h3>

            <!-- Description -->
            <p class="text-gray-600 mb-6 leading-relaxed">
                Harness the latest technologies to streamline operations, enhance customer experiences, and drive business innovation.
            </p>

            <!-- Learn More Link -->
            <a href="#" class=" text-[#0DC0E2]  mt-12">
                Learn more
                <span class="ml-1 transform translate-y-px">></span>
            </a>
        </div>
    </div>
      <!-- Integration Solutions -->
      <div class="w-full flex h-[453px]">
          <div class="lg:w-2/3 bg-white p-10 rounded-lg shadow-lg ">
              <!-- Title -->
              <h3 class="text-2xl font-bold text-[#315CD4] mb-4">
                  Integration Solutions
              </h3>

              <!-- Description -->
              <p class="text-gray-600 mb-6 leading-relaxed">
                  Connect and unify your business systems seamlessly for optimized performance and enhanced security.
              </p>

              <!-- Learn More Link -->
              <a href="#" class=" text-[#0DC0E2]  mt-12">
                  Learn more
                  <span class="ml-1 transform translate-y-px">></span>
              </a>
          </div>
      </div>
  </div>
</div>
<!-- Why Datum -->
<div class="relative min-h-screen py-[100px] overflow-hidden mb-20">
    <!-- Background Image -->
    <div class="absolute z-0 right-0 top-0 overflow-hidden">
        <img class="w-full h-full object-cover" 
             src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image_5.png' ?>" 
             alt="Background">
    </div>
    
    <!-- Content Overlay -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 ">
        <!-- Title -->
        <h1 class="text-4xl md:text-5xl lg:text-[56px] font-bold text-gray-900 mb-8 max-w-2xl">
            Why <span class="text-[#0DC0E2]">Datum</span>
        </h1>
        
        <!-- Content Box -->
        <div class="bg-white" style="weight: 500px;">
            <!-- Outcome-Driven Innovation -->
            <div class="pb-4 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800 mb-2" style="color : #315CD4">Outcome-Driven Innovation</h2>
            <p class="text-gray-600 text-sm leading-relaxed">
                We start with your goals and craft tailored solutions<br>that solve real business challenges.
            </p>
            </div>
            
            <!-- Seamless Collaboration -->
            <div class="pb-4 border-b border-gray-200 mt-4 mb-4">
            <h2 class="text-xl font-bold text-gray-800 mb-2" style="color : #315CD4">Seamless Collaboration</h2>
            <p class="text-gray-600 text-sm leading-relaxed">
                Open, honest, and frequent communication<br>ensures transparency and alignment at every step.
            </p>
            </div>
            
            <!-- Trusted Expertise -->
            <div class="pb-4">
            <h2 class="text-xl font-bold text-gray-800 mb-2" style="color : #315CD4">Trusted Expertise</h2>
            <p class="text-gray-600 text-sm leading-relaxed">
                We deliver IT solutions right the first time,<br>acting as a reliable partner invested in your success.
            </p>
            </div>
        </div>
    </div>
</div>

<!-- Our Story -->
<div class="py-[100px] w-full" 
     style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/assets/images/img_6.png' ?>');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;">

    <!-- Content Box -->
    <div class="ml-40  w-[400px] max-w-md mx-4 bg-white p-10">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">
            Our Story
        </h1>
        
        <div class="text-gray-700 mb-6 space-y-3">
            <p class="text-sm leading-relaxed">
                Founded in 2017, Datum Consulting is an engineering and digital transformation consultancy based in Auckland, New Zealand. We've partnered with businesses of all sizes—from ambitious startups to one of Australia's Big Four banks—to deliver high-quality software and drive digital transformation.
            </p>
        </div>
        
        <a href="#" class=" text-[#0DC0E2] ">
            About Datum
        </a>
    </div>
</div>

<!-- Our Partners -->
<div class="container py-[100px]">
    <div class="grid grid-cols-2">
        <div class="text-[20px]">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
                Our Partners
            </h1>
            
            <p class="text-lg text-gray-600 mb-4 leading-normal max-w-md">
                At Datum, we foresee potential challenges and proactively address them. 
                By partnering with AWS, we ensure that our technology solutions are seamlessly 
                integrated with your business strategy, creating a comprehensive roadmap that 
                paves the way for sustainable growth and success.
            </p>
        </div>
        <div class="flex justify-center">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image_7.png'  ?>" />
        </div>
    </div>
</div>

<!-- Join the Digital Revolution -->
<div class="container py-[100px]">
    <div class="grid grid-cols-1 text-center">
        <div class="text-[48px]">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
                <span style="color : #315CD4">Join the Digital Revolution </span>
            </h1>
            
            <p class="text-lg text-gray-600 mb-12 leading-normal max-w-md">
                Future-proof your business with Datum.Let’s build smarter, <br> 
                faster, and
                more powerful digital solutions together.
            </p>

            <button >
                Schedule a consultation with our expert
            </button>
        </div>
    </div>
</div>

<!-- Location -->
<div class="relative py-24 md:py-32 bg-gray-100 overflow-hidden">
  <!-- Background Image -->
  <div class="absolute  z-0 right-0">
    <img class="w-auto h-auto object-cover opacity-20" 
         src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_8.png' ?>" 
         alt="World Map Background">
  </div>
  
  <!-- Content -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h1 class="text-4xl font-bold text-gray-900 mb-12">
            Location
        </h1>
    
    <div >
      <!-- New Zealand Column --> 
      <div class="w-1/2 p-8 rounded-lg shadow-lg mb-20" style="background-color: #C4E1F5">
        <h2 class="text-2xl font-bold  mb-6 pb-4 border-b border-gray-200">
          <span style ="color : #315CD4">New Zealand</span>
        </h2>
        
        <div class="space-y-6">
          <div style="color : #000000">
            <h3 class="text-xl font-semibold text-white mb-4"><span style="color : #000000" >Hamilton</span></h3>
            <p class=" mt-2 mb-2">
              The Meteor Theatre, 1 Victoria Street, Hamilton 3204
            </p>
          </div>
          
          <div class="border-b-2 border-white pb-4 mt-8 mb-4" style="color : #000000">
            <h3 class="text-xl font-semibold">Auckland</h3>
            <p class="text- mt-2">
              70 Symonds Str, Auckland CBD, 1010
            </p>
          </div>
        </div>
              <!-- Australia/Asia Column -->

              <div class="space-y-6"> <!-- Container chính với khoảng cách giữa các mục -->
                <!-- Australia -->
                <div class="border-b-2 border-white pb-4 mt-8 mb-4"> 
                    
                    <h2 class="text-2xl font-bold mb-4" style="color: #315CD4">
                    Australia
                    </h2>
                </div>
                
                <!-- Vietnam -->
                <div class="border-b-2 border-white pb-4 mt-8 mb-4"> 
                    <h2 class="text-2xl font-bold mb-4" style="color: #315CD4">
                    VietNam
                    </h2>
                </div>
                
                <!-- Philippines -->
                <div> 
                    <h2 class="text-2xl font-bold" style="color: #315CD4">
                    Philippines
                    </h2>
                </div>
              </div>
        

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
