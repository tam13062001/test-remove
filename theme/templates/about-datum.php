<?php /* Template Name: Service: About Datum Template */ ?>

<?php get_header(); ?>

<div class="h-[603px] relative">
    <img class="object-cover h-full w-full"
        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/datum-about-slide.jpg'  ?>" />
    <div class="absolute top-1/2 -translate-y-1/2 z-10 font-[700] text-white text-[40px] leading-[120%]">
        <div>About Datum</div>
    </div>
</div>

<!-- second section -->
<div class="container">
    <div class="flex pt-[93px] w-[723px]">
        <div class="text-[36px] font-normal leading-[170%] text-black">
            <div>
                At Datum, we are more than just a technology consultancy—we are your strategic partner in digital
                transformation.
            </div>
        </div>
    </div>

    <div class="flex pt-[93px] w-[785px]">
        <div class="text-[20px] font-normal leading-[170%] text-black tracking-[-0.2px]">
            <div>
                <p class="mb-8">
                    We specialize in cloud engineering, data and AI, platform engineering, and software integration,
                    helping
                    businesses scale, optimize, and secure their technology landscape.
                </p>
                <p>
                    With deep expertise across banking, finance, energy, consumer goods, and digital enterprises, we
                    deliver
                    tailored, high-impact solutions that drive efficiency, innovation, and competitive advantage.
                </p>
            </div>
        </div>
    </div>

    <div class="flex pt-[126px] w-[785px]">
        <div class="text-[40px] font-[700] text-black tracking-[-0.4px]">
            <div>
                We help businesses unlock the full potential of their technology investments through:
            </div>
        </div>
    </div>

    <div class="flex pt-[126px] w-[1130px]">
        <!-- Container -->
        <div class="mx-auto divide-y divide-primary my-[50px] ">
            <!-- Row 1 -->
            <div class="grid grid-cols-1 md:grid-cols-[439px_671px] gap-5 py-[50px]">
                <h2 class="text-4xl font-normal text-primary">
                    Data &amp; AI
                </h2>
                <p class="text-xl text-black leading-[170%]">
                    Datum enables businesses to harness the power of the cloud and data
                    for enhanced decision-making and operational efficiency. From cloud
                    migration to data lakehouse implementation, we help clients scale
                    their infrastructure and unlock valuable insights from their data.
                </p>
            </div>

            <!-- Row 2 -->
            <div class="grid grid-cols-1 md:grid-cols-[439px_671px] gap-5 py-[50px]">
                <h2 class="text-4xl font-normal text-primary">
                    Platform Engineering
                </h2>
                <p class="text-xl text-black leading-[170%]">
                    DatumConsulting ensures that your technology is both secure and compliant
                    with industry regulations. From secure data encryption to DevSecOps, we embed
                    security into every stage of the development and operational process.
                </p>
            </div>

            <!-- Row 3 -->
            <div class="grid grid-cols-1 md:grid-cols-[439px_671px] gap-5 py-[50px]">
                <h2 class="text-4xl font-normal text-primary">
                    System &amp; Data Integration
                </h2>
                <p class="text-xl text-black leading-[170%]">
                    Our integration services ensure that disparate systems across your organization
                    work together seamlessly. Datum excels in legacy system integration, cloud
                    migration, and secure data sharing mechanisms that enhance business agility
                    and collaboration.
                </p>
            </div>
            <hr class="border-primary my-4" />
        </div>
    </div>
</div>

<!-- We dont just -->
<div class="w-screen text-white bg-gradient-to-r from-[#3DA7F2] to-[#315CD4]">
    <div class="container pt-[142px] pb-[215px]">
        <div class="text-[40px] font-bold w-[785px]">
            We don’t just deploy technology,<br>we solve business challenges with:
        </div>
        <div class="max-w-[855px]">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-[120px] gap-x-[65px] pt-[106px]">

                <!-- Column 1 -->
                <div>
                    <h3 class="text-2xl font-semibold mb-2 pb-5">
                        Industry Expertise
                    </h3>
                    <p class="text-xl leading-relaxed">
                        Decades of experience in banking, finance, energy,
                        and consumer technology.
                    </p>
                </div>

                <!-- Column 2 -->
                <div>
                    <h3 class="text-2xl font-semibold mb-2 pb-5">
                        Customized Solutions
                    </h3>
                    <p class="text-xl leading-relaxed">
                        Technology tailored to your business goals, industry
                        requirements, and regulatory landscape.
                    </p>
                </div>

                <!-- Column 3 -->
                <div>
                    <h3 class="text-2xl font-semibold mb-2 pb-5">
                        Proven Track Record
                    </h3>
                    <p class="text-xl leading-relaxed">
                        99.9% uptime for critical banking applications,
                        zero-downtime deployments, and long-term partnerships.
                    </p>
                </div>

                <!-- Column 4 -->
                <div>
                    <h3 class="text-2xl font-semibold mb-2 pb-5">
                        End-to-End Support
                    </h3>
                    <p class="text-xl leading-relaxed">
                        From strategy to execution and continuous optimization,
                        we ensure maximum ROI on every project.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Our Values -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>

<section class="flex flex-col md:flex-row">
    <div class="w-full md:w-1/2 aspect-square">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/our_values.jpg'  ?>" alt="Our Values"
            class="object-cover" />
    </div>

    <!-- Right content area -->
    <div class="w-full md:w-1/2 pt-[104px] pl-[127px] bg-[#C4E1F5] flex flex-col">
        <h2 class="text-[40px] font-bold mb-8">Our values</h2>

        <!-- Alpine.js state for collapsibles -->
        <div x-data="{ openItem: null }" class="space-y-6">

            <!-- 1. Strategic Excellence -->
            <div class="left bg-transparent border-0">
                <button @click="openItem = (openItem === 1 ? null : 1)"
                    class="flex items-center justify-between w-full text-left appearance-none bg-transparent border-0">
                    <span class="font-semibold text-lg">
                        Strategic Excellence
                    </span>
                    <!-- Toggle plus/minus based on state -->
                    <span x-show="openItem !== 1">+</span>
                    <span x-show="openItem === 1">-</span>
                </button>
                <!-- Collapsible content -->
                <div x-show="openItem === 1" x-transition class="mt-2 text-gray-700">
                    <p>
                        We anticipate challenges before they arise. Our technology
                        solutions align with your business strategy, providing a
                        clear roadmap for long-term success.
                    </p>
                </div>
            </div>

            <!-- 2. Speed with Precision -->
            <div>
                <button @click="openItem = (openItem === 2 ? null : 2)"
                    class="flex items-center justify-between w-full text-left">
                    <span class="font-semibold text-lg">
                        Speed with Precision
                    </span>
                    <span x-show="openItem !== 2">+</span>
                    <span x-show="openItem === 2">-</span>
                </button>
                <div x-show="openItem === 2" x-transition class="mt-2 text-gray-700">
                    <p>
                        We deliver timely solutions without compromising on quality,
                        ensuring agility and accuracy in every project phase.
                    </p>
                </div>
            </div>

            <!-- 3. Client Centric Approach -->
            <div>
                <button @click="openItem = (openItem === 3 ? null : 3)"
                    class="flex items-center justify-between w-full text-left">
                    <span class="font-semibold text-lg">
                        Client Centric Approach
                    </span>
                    <span x-show="openItem !== 3">+</span>
                    <span x-show="openItem === 3">-</span>
                </button>
                <div x-show="openItem === 3" x-transition class="mt-2 text-gray-700">
                    <p>
                        Our solutions are tailored to each client’s unique
                        requirements, ensuring measurable impact and satisfaction.
                    </p>
                </div>
            </div>

            <!-- 4. Global Mindset, Local Expertise -->
            <div>
                <button @click="openItem = (openItem === 4 ? null : 4)"
                    class="flex items-center justify-between w-full text-left">
                    <span class="font-semibold text-lg">
                        Global Mindset, Local Expertise
                    </span>
                    <span x-show="openItem !== 4">+</span>
                    <span x-show="openItem === 4">-</span>
                </button>
                <div x-show="openItem === 4" x-transition class="mt-2 text-gray-700">
                    <p>
                        We combine international best practices with local insights
                        to drive sustainable growth in diverse markets.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Our Teams -->
<div class="container mb-[92px]">

    <!-- Section Heading -->
    <h2 class="text-[40px] font-bold text-black ml-[155px] mt-[139px] mb-[131px]">
        Our Team
    </h2>

    <!-- Team Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Member 1 -->
        <div class="text-center">
            <!-- Replace with your image source -->
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/our_team_1.jpg'  ?>"
                alt="Nghia Nguyen" class="w-full object-cover mb-4" />
            <h3 class="text-2xl font-bold text-primary">
                Nghia Nguyen
            </h3>
            <p class="text-xl text-black mb-2">
                Co-founder
            </p>

        </div>

        <!-- Member 2 -->
        <div class="text-center">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/our_team_2.jpg'  ?>" alt="Nick Do"
                class="w-full object-cover mb-4" />
            <h3 class="text-2xl font-bold text-primary">
                Nick Do
            </h3>
            <p class="text-xl text-black mb-2">
                Co-founder
            </p>

        </div>

        <!-- Member 3 -->
        <div class="text-center">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/our_team_3.jpg'  ?>"
                alt="Thang Nguyen" class="w-full object-cover mb-4" />
            <h3 class="text-2xl font-bold text-primary">
                Thang Nguyen
            </h3>
            <p class="text-xl text-black mb-2">
                CIO – Chief of Information Officer
            </p>

        </div>
    </div>

    <!-- 2 Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-[249px] mt-[92px] ml-[158px]">

        <!-- Column 1 -->
        <div class="max-w-[326px]">

            <p class="text-[64px] font-bold text-black">
                30+
            </p>
            <p class="text-gray-700">
                Solution Architects &amp; Technical Leads
            </p>
        </div>

        <!-- Column 2 -->
        <div class="max-w-[326px]">
            <p class="text-[64px] font-bold text-black">
                120+
            </p>
            <p class="text-gray-700">
                Cloud, AI, DevOps, and Software Engineering Specialists
            </p>
        </div>

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

<!-- Location -->
<div class="relative py-24 md:py-32 bg-gray-100 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute  z-0 right-0">
        <img class="w-auto h-auto object-cover opacity-20"
            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_8.png' ?>" alt="World Map Background">
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h1 class="text-4xl font-bold text-gray-900 mb-12">
            Location
        </h1>

        <div>
            <!-- New Zealand Column -->
            <div class="w-1/2 p-8 rounded-lg shadow-lg mb-20" style="background-color: #C4E1F5">
                <h2 class="text-2xl font-bold  mb-6 pb-4 border-b border-gray-200">
                    <span style="color : #315CD4">New Zealand</span>
                </h2>

                <div class="space-y-6">
                    <div style="color : #000000">
                        <h3 class="text-xl font-semibold text-white mb-4"><span style="color : #000000">Hamilton</span>
                        </h3>
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

                <div class="space-y-6">
                    <!-- Container chính với khoảng cách giữa các mục -->
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