<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$percent = $args['percent'] ?? '';
$percent_content = $args['percent_content'] ?? '';
$image_url = $args['image_url'] ?? '';
?>

<div class="relative lg:min-h-[880px] lg:my-[88px]">
    <div class="container pt-[40px] lg:py-[100px] z-10 relative">
        <h2 class="font-[700] text-[32px] lg:text-[40px] ">
            <?php echo $title ?>
        </h2>
        <div class=" lg:w-1/2 bg-white pt-6 lg:py-5 lg:pr-[100px]">
            <div class="text-[16px] lg:text-xl font-normal leading-[170%]">
                <?php echo $content; ?>
            </div>

            <div class="container pt-6 lg:py-8 lg:pt-[20px] lg:pb-[80px]">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    <div class="flex flex-col lg:flex-row items-center relative">
                        <div class="relative text-[56px] lg:text-[96px] leading-[170%] mr-0 lg:mr-5 mb-5 lg:mb-0
                            bg-gradient-to-r from-secondary to-primary text-transparent bg-clip-text">
                            <?php echo $percent; ?>
                            <!-- <div class="absolute h-2 w-[60px] bg-primary bottom-0 left-0"></div> -->
                        </div>
                        <div class="leading-[170%] text-[20px] lg:text-2xl text-primary font-bold">
                            <?php echo $percent_content; ?>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="lg:w-3/5 py-[40px] lg:py-0 lg:absolute right-0 top-0 h-full overflow-hidden ">
        <div class="flex items-end h-full">
            <img class="object-cover h-auto w-full" src="<?php echo $image_url?>" alt="" />
        </div>
    </div>
</div>