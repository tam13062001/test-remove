<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$percent = $args['percent'] ?? '';
$percent_content = $args['percent_content'] ?? '';
$image_url = $args['image_url'] ?? '';
?>

<div class="relative lg:h-[880px]  lg:my-[88px]">
    <div class="container  z-10 relative">
        <h2 class="font-[700] text-[30px] lg:text-[40px] mt-[24px]">
            <?php echo $title ?>
        </h2>
        <div class="lg:w-3/5 bg-white pt-6 lg:pt-[60px] lg:pr-[100px]">
            <div class="text-[16px] lg:text-[20px] font-normal leading-[170%]">
                <?php echo $content; ?>
            </div>

            <div class=" [&>:not(:last-child)]:border-b pt-6 lg:py-8 lg:pt-[20px] ">

                <div class="border-primary lg:py-5 flex flex-col lg:flex-row lg:space-x-5"></div>
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-6 border-y-1 border-primary">
                    <div class="flex flex-col lg:flex-row items-center relative">
                        <div class="relative text-[56px] lg:text-[96px] leading-[170%] mr-0 lg:mr-5
                            bg-gradient-to-r from-secondary to-primary text-transparent bg-clip-text">
                            <?php echo $percent; ?>
                            <!-- <div class="absolute h-2 w-[60px] bg-primary bottom-0 left-0"></div> -->
                        </div>
                    </div>
                    <div class="flex items-center justify-center lg:justify-start leading-[170%]  text-[20px] lg:text-[24px] text-primary font-bold mb-5 lg:mb-0">
                        <?php echo $percent_content; ?>
                    </div>
                </div>
                <div class="border-primary border-t-1  flex flex-col lg:flex-row lg:space-x-5"></div>
            </div>
        </div>
    </div>
    
    <div class="lg:w-3/5 py-[40px] lg:py-0 lg:absolute right-0 top-0 h-full overflow-hidden ">
        <div class="flex items-end h-full">
            <img class="object-cover h-auto lg:w-[96%] w-full lg:ml-[50px]" src="<?php echo $image_url?>" alt="" />
        </div>
    </div>
</div>