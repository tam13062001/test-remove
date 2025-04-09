<?php
$title = $args['title'] ?? '';
$items = $args['items'] ?? array();
$image_url = $args['image_url'] ?? '';
?>


<section class="flex flex-col md:flex-row">
    <div class="w-full md:w-1/2 aspect-[1/1]">
        <img src="<?php echo $image_url  ?>" alt="<?php echo $title; ?>" class="h-full w-full object-cover" />
    </div>

    <!-- Right content area -->

    <div class="container w-full md:w-1/2 pb-[60px] pt-[60px] lg:pt-[104px] lg:pl-[125px] bg-[#C4E1F5] flex flex-col">
        <h2 class="text-[32px] lg:text-[40px] font-bold mb-[53px]"><?php echo $title; ?></h2>

        <!-- Alpine.js state for collapsibles -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

        <div class="bg-[#C4E1F5] lg:w-[440px]" x-data="{ showNZ: false }">

            <!-- Strategic Sections -->
            <div class="space-y-4 lg:space-y-6" x-data="{ showA: false }">
                <?php foreach($items as $item): ?>
                <div class=" pb-4 lg:pb-6 flex justify-between cursor-pointer"
                    @click="showA = !showA">
                    <h2 class="text-lg md:text-xl lg:text-[24px] font-bold text-primary">
                        <?php echo $item['title']; ?>
                    </h2>
                    <i :class="showA ? 'fa-solid fa-minus' : 'fa-regular fa-plus'"
                        class="mt-2 lg:mt-[2px] text-[#3DA7F2]"></i>
                </div>
                
                <!-- Nội dung chi tiết (ẩn/hiện) -->
                <div class="space-y-4 lg:space-y-6" x-show="showA" x-transition>
                    <div>
                        <?php if (isset($item['content_heading'])): ?>
                        <h3 class="text-lg md:text-xl lg:text-[24px] font-semibold mt-2 lg:mt-4">
                            <?php echo $item['content_heading']; ?>
                        </h3>
                        <?php endif; ?>
                        <p class="text-gray-800 text-base md:text-lg lg:text-[20px] font-mixed ">
                            <?php echo $item['content_text']; ?>
                        </p>
                    </div>
                </div>
                <div class="border-b border-[#FFFFFF] mt-6"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>