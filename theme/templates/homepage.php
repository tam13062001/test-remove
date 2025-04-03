<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>

<!-- Hero Section -->
<div class="h-[824px] relative">
    <img class="object-cover h-full w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img.png' ?>" alt="Hero Background" />
    <div class="absolute top-1/2 -translate-y-1/2 z-10 font-bold text-white text-4xl xl:text-[72px] leading-[120%] w-full px-4 xl:px-0">
        <div class="container mx-auto">
            <div>Pioneering</div>
            <div>the Future of</div>
            <div class="text-[#0DC0E2]">Digital Innovation</div>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="container py-[100px] mx-auto px-4 xl:px-0">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div class="text-2xl xl:text-[36px]">
            <div class="mb-12">
                Datum is your trusted partner in digital transformation, seamlessly integrating Cloud
                Solutions, Software Engineering, and Data & AI to help businesses scale, innovate,
                and stay ahead.
            </div>
            <button class="bg-[#315CD4] text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-[#0DC0E2] transition-colors">
                Schedule a consultation with our expert
            </button>
        </div>
        <div class="flex justify-center items-center">
            <img class="max-w-full h-auto" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_1.png' ?>" alt="About Datum" />
        </div>
    </div>
</div>

<!-- What Sets Us Apart -->
<div class="container py-[100px] mx-auto px-4 xl:px-0">
    <h1 class="text-4xl xl:text-5xl font-bold text-gray-900 mb-16">
        What Sets Us Apart
    </h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 xl:gap-12">
        <!-- Data & AI Card -->
        <div class="bg-white rounded-lg p-6 hover:shadow-xl transition-shadow">
            <img class="w-full h-[224px] object-cover" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_2.png' ?>" alt="Data & AI" />
            <h2 class="text-2xl font-bold mb-4 mt-4 text-[#315CD4]">Data & AI</h2>
            <p class="text-gray-600">
                Unlock the full potential of your data with AI-driven insights. We transform raw data into intelligent strategies, enabling smarter decision-making and competitive advantage.
            </p>
        </div>
        
        <!-- Cloud Solutions Card -->
        <div class="bg-white rounded-lg p-6 hover:shadow-xl transition-shadow">
            <img class="w-full h-[224px] object-cover" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_3.png' ?>" alt="Cloud Solutions" />
            <h2 class="text-2xl font-bold mb-4 mt-4 text-[#315CD4]">Cloud Solutions</h2>
            <p class="text-gray-600">
                Build a scalable and resilient cloud ecosystem tailored to your needs. We help businesses optimize their cloud infrastructure, enhance security, and drive operational efficiency.
            </p>
        </div>
        
        <!-- Software Engineering Card -->
        <div class="bg-white rounded-lg p-6 hover:shadow-xl transition-shadow">
            <img class="w-full h-[224px] object-cover" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_4.png' ?>" alt="Software Engineering" />
            <h2 class="text-2xl font-bold mb-4 mt-4 text-[#315CD4]">Software Engineering</h2>
            <p class="text-gray-600">
                Elevate your business with future-ready software solutions. From custom application development to enterprise systems, we craft intuitive and powerful software that accelerates growth.
            </p>
        </div>
    </div>
</div>

<!-- Game-Changing Solutions -->
<div class="container py-[100px] mx-auto px-4 xl:px-0">
    <h2 class="text-4xl font-bold text-gray-900 mb-12">
        Game-Changing Solutions
    </h2>

    <div class="space-y-8 xl:space-y-20">
        <!-- Platform Engineering -->
        <div class="w-full flex h-auto xl:h-[453px]">
            <div class="w-full xl:w-2/3 bg-white p-8 xl:p-10 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <h3 class="text-2xl font-bold text-[#315CD4] mb-4">
                    Platform Engineering
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Build a strong digital foundation with scalable and agile infrastructure solutions.
                </p>
                <a href="#" class="text-[#0DC0E2] mt-12 inline-flex items-center font-semibold">
                    Learn more
                    <span class="ml-1">></span>
                </a>
            </div>
        </div>
        
        <!-- Digital Transformation -->
        <div class="w-full flex justify-end h-auto xl:h-[453px]">
            <div class="w-full xl:w-2/3 bg-white p-8 xl:p-10 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <h3 class="text-2xl font-bold text-[#315CD4] mb-4">
                    Digital Transformation
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Harness the latest technologies to streamline operations, enhance customer experiences, and drive business innovation.
                </p>
                <a href="#" class="text-[#0DC0E2] mt-12 inline-flex items-center font-semibold">
                    Learn more
                    <span class="ml-1">></span>
                </a>
            </div>
        </div>
        
        <!-- Integration Solutions -->
        <div class="w-full flex h-auto xl:h-[453px]">
            <div class="w-full xl:w-2/3 bg-white p-8 xl:p-10 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <h3 class="text-2xl font-bold text-[#315CD4] mb-4">
                    Integration Solutions
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Connect and unify your business systems seamlessly for optimized performance and enhanced security.
                </p>
                <a href="#" class="text-[#0DC0E2] mt-12 inline-flex items-center font-semibold">
                    Learn more
                    <span class="ml-1">></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Why Datum -->
<div class="relative py-16 xl:py-32 overflow-hidden  mb-12">
    <div class="absolute z-0 right-0 top-0 h-full">
        <img class="w-auto h-full object-cover" 
             src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image_5.png' ?>" 
             alt="World Map Background">
    </div>
    
    <div class="container mx-auto px-4 xl:px-0 relative z-10 ">
        <h1 class="text-4xl xl:text-[56px] font-bold text-gray-900 mb-12 max-w-2xl">
            Why <span class="text-[#0DC0E2]">Datum</span>
        </h1>
        
        <div class="bg-white p-8 xl:p-12 shadow-lg rounded-lg w-full xl:w-[960px]">
            <!-- Outcome-Driven Innovation -->
            <div class="pb-6 border-b border-gray-200">
                <h2 class="text-xl xl:text-2xl font-bold text-[#315CD4] mb-4">Outcome-Driven Innovation</h2>
                <p class="text-gray-600 leading-relaxed">
                    We start with your goals and craft tailored solutions that solve real business challenges.
                </p>
            </div>
            
            <!-- Seamless Collaboration -->
            <div class="py-6 border-b border-gray-200">
                <h2 class="text-xl xl:text-2xl font-bold text-[#315CD4] mb-4">Seamless Collaboration</h2>
                <p class="text-gray-600 leading-relaxed">
                    Open, honest, and frequent communication ensures transparency and alignment at every step.
                </p>
            </div>
            
            <!-- Trusted Expertise -->
            <div class="pt-6">
                <h2 class="text-xl xl:text-2xl font-bold text-[#315CD4] mb-4">Trusted Expertise</h2>
                <p class="text-gray-600 leading-relaxed">
                    We deliver IT solutions right the first time, acting as a reliable partner invested in your success.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Our Story -->
<div class="py-[100px] w-full bg-cover bg-center" 
     style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/assets/images/img_6.png' ?>')">
    <div class="container mx-auto px-4 xl:px-0">
        <div class="ml-0 xl:ml-40 w-full xl:w-[400px] bg-white p-8 xl:p-10 shadow-lg">
            <h1 class="text-4xl font-bold text-gray-900 mb-6">
                Our Story
            </h1>
            
            <div class="text-gray-700 mb-8 space-y-4">
                <p class="leading-relaxed">
                    Founded in 2017, Datum Consulting is an engineering and digital transformation consultancy based in Auckland, New Zealand. We've partnered with businesses of all sizes—from ambitious startups to one of Australia's Big Four banks—to deliver high-quality software and drive digital transformation.
                </p>
            </div>
            
            <a href="#" class="text-[#0DC0E2] font-semibold inline-flex items-center">
                About Datum
                <span class="ml-2">→</span>
            </a>
        </div>
    </div>
</div>

<!-- Our Partners -->
<div class="container py-[100px] mx-auto px-4 xl:px-0">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div>
            <h1 class="text-4xl xl:text-5xl font-bold text-gray-900 mb-8">
                Our Partners
            </h1>
            
            <p class="text-lg text-gray-600 mb-8 leading-normal max-w-2xl">
                At Datum, we foresee potential challenges and proactively address them. 
                By partnering with AWS, we ensure that our technology solutions are seamlessly 
                integrated with your business strategy, creating a comprehensive roadmap that 
                paves the way for sustainable growth and success.
            </p>
        </div>
        <div class="flex justify-center items-center">
            <img class="max-w-full h-auto" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image_7.png' ?>" alt="Our Partners" />
        </div>
    </div>
</div>

<!-- Join the Digital Revolution -->
<div class="container py-[100px] mx-auto px-4 xl:px-0">
    <div class="text-center">
        <h1 class="text-4xl xl:text-5xl font-bold text-[#315CD4] mb-8">
            Join the Digital Revolution
        </h1>
        
        <p class="text-xl text-gray-600 mb-12 leading-normal max-w-3xl mx-auto">
            Future-proof your business with Datum. Let's build smarter, faster, and more powerful digital solutions together.
        </p>

        <button class="bg-[#315CD4] text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-[#0DC0E2] transition-colors">
            Schedule a consultation with our expert
        </button>
    </div>
</div>

<!-- Location -->
<div class="relative py-16 xl:py-32  overflow-hidden">
    <div class="absolute z-0 right-0 top-0 h-full">
        <img class="w-auto h-full object-cover" 
             src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_8.png' ?>" 
             alt="World Map Background">
    </div>
    
    <div class="container mx-auto px-4 xl:px-0 relative z-10">
        <h1 class="text-4xl font-bold text-gray-900 mb-12">
            Location
        </h1>
    
        <div class="w-[1100px] ">
            <div class="bg-[#C4E1F5] p-8 ">
                <h2 class="text-2xl font-bold text-[#315CD4] mb-6 pb-4 border-b border-gray-200">
                    New Zealand
                </h2>
                
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Hamilton</h3>
                        <p class="text-gray-800">
                            The Meteor Theatre, 1 Victoria Street, Hamilton 3204
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-300 pb-6">
                        <h3 class="text-xl font-semibold mb-2">Auckland</h3>
                        <p class="text-gray-800">
                            70 Symonds Str, Auckland CBD, 1010
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-300 pb-6">
                        <h2 class="text-2xl font-bold text-[#315CD4] mb-4">
                            Australia
                        </h2>
                    </div>
                    
                    <div class="border-b border-gray-300 pb-6">
                        <h2 class="text-2xl font-bold text-[#315CD4] mb-4">
                            Vietnam
                        </h2>
                    </div>
                    
                    <div>
                        <h2 class="text-2xl font-bold text-[#315CD4]">
                            Philippines
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>