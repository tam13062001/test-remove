<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? 'Default Content';
$image_url = $args['image_url'] ?? '';
$bg_image_url = $args['bg_image_url'] ?? '';
?>

<h1 class="container text-2xl md:text-3xl lg:text-[40px] font-bold mb-6 lg:mb-12 px-4 lg:px-0">
    Locations
</h1>

<div class="relative lg:min-h-[880px] mb-10 lg:mb-20">
    <!-- Mobile Image (Top) -->
    <div class="block lg:hidden  lg:w-[370px]  ml-5  h-[280px] w-[370px] overflow-hidden">
        <img class="object-cover w-full h-full mt-5" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_8.png' ?>" alt="Locations map" />
    </div>
    
    <!-- Desktop Image (Right Side) -->
    <div class="hidden lg:block lg:w-[700px] lg:absolute right-0 top-0 h-[710px] w-[700px] overflow-hidden">
        <div class="flex lg:items-end h-full">
            <img class="object-cover h-auto w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_8.png' ?>" alt="" />
        </div>
    </div>
    
    <!-- Content Container -->
    <div class="container lg:pt-[50px] lg:py-[100px] z-10 relative px-4 lg:px-0 mb-6">
        <div class="lg:w-[800px] w-full lg:h-[588px] h-auto">
                        <!-- Nhúng Alpine.js nếu chưa có -->
            <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

            <div class="bg-[#C4E1F5] p-6 md:p-8 lg:p-10" x-data="{ showNZ: false }">
                <!-- New Zealand Section -->
                <div class="flex justify-between cursor-pointer " @click="showNZ = !showNZ">
                    <h2 class="text-lg md:text-xl lg:text-[24px] font-bold text-primary mb-4 lg:mb-6 pb-3 lg:pb-4 mt-4 lg:mt-7 ml-4 lg:ml-12">
                        New Zealand
                    </h2>

                    <i :class="showNZ ? 'fa-solid fa-minus' : 'fa-regular fa-plus'" class="mt-3 lg:mt-9 text-[#3DA7F2]"></i>
                </div>

                <!-- Nội dung chi tiết (ẩn/hiện) -->
                <div class="space-y-4 lg:space-y-6" x-show="showNZ" x-transition>
                    <div>
                        <h3 class="text-lg md:text-xl lg:text-[24px] font-semibold ml-4 lg:ml-12 mt-2 lg:mt-4">Hamilton</h3>
                        <p class="text-gray-800 text-base md:text-lg lg:text-[20px] font-mixed ml-4 lg:ml-12 ">
                            The Meteor Theatre, 1 Victoria Street, Hamilton 3204
                        </p>
                    </div>

                    <div class="border-b border-[#FFFFFF] pb-4 lg:pb-6">
                        <h3 class="text-lg md:text-xl lg:text-[24px] font-semibold ml-4 lg:ml-12">Auckland</h3>
                        <p class="text-gray-800 text-base md:text-lg lg:text-[20px] font-mixed ml-4 lg:ml-12">
                            70 Symonds Str, Auckland CBD, 1010
                        </p>
                    </div>
                </div>

                <!-- Other Countries Sections -->
                <div class="space-y-4 lg:space-y-6 mt-6"x-data="{ showA: false }">
                    <div class="border-b border-[#FFFFFF] pb-4 lg:pb-6 flex justify-between cursor-pointer"@click="showA = !showA">
                        <h2 class="text-lg md:text-xl lg:text-[24px] font-bold text-primary mt-3 lg:mt-6 ml-4 lg:ml-12">
                            Australia
                        </h2>
                        <i :class="showA ? 'fa-solid fa-minus' : 'fa-regular fa-plus'" class="mt-3 lg:mt-9 text-[#3DA7F2]"></i>
                    </div>

                    <div class="space-y-4 lg:space-y-6" x-show="showA" x-transition>
                    <div>
                        <h3 class="text-lg md:text-xl lg:text-[24px] font-semibold ml-4 lg:ml-12 mt-2 lg:mt-4">Hamilton</h3>
                        <p class="text-gray-800 text-base md:text-lg lg:text-[20px] font-mixed ml-4 lg:ml-12 ">
                            The Meteor Theatre, 1 Victoria Street, Hamilton 3204
                        </p>
                    </div>

                    <div class="border-b border-[#FFFFFF] pb-4 lg:pb-6">
                        <h3 class="text-lg md:text-xl lg:text-[24px] font-semibold ml-4 lg:ml-12">Auckland</h3>
                        <p class="text-gray-800 text-base md:text-lg lg:text-[20px] font-mixed ml-4 lg:ml-12">
                            70 Symonds Str, Auckland CBD, 1010
                        </p>
                    </div>
                </div>

                    <div class="border-b border-[#FFFFFF] pb-4 lg:pb-6 flex justify-between">
                        <h2 class="text-lg md:text-xl lg:text-[24px] font-bold text-primary ml-4 lg:ml-12">
                            VietNam
                        </h2>
                        <i :class="showNZ ? 'fa-solid fa-minus' : 'fa-regular fa-plus'" class="mt-3 lg:mt-9 text-[#3DA7F2]"></i>
                    </div>

                    <div class="flex justify-between">
                        <h2 class="text-lg md:text-xl lg:text-[24px] font-bold text-primary mb-4 lg:mb-6 ml-4 lg:ml-12">
                            Philippines
                        </h2>
                        <i :class="showNZ ? 'fa-solid fa-minus' : 'fa-regular fa-plus'" class="mt-3 lg:mt-9 text-[#3DA7F2]"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>