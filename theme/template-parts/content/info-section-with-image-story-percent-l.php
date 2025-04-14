<?php
$title = $args['title'] ?? '';
$heading = $args['heading'] ?? '';
$content = $args['content'] ?? '';
$percent = $args['percent'] ?? '';
$percent_content = $args['percent_content'] ?? '';
$image_url = $args['image_url'] ?? '';
?>

<div class="relative lg:min-h-[880px] lg:my-[88px] lg:mt-[100px] lg:mb-[150px]">

    <!-- Text content section -->
    <div class="relative lg:absolute top-0 right-0 lg:w-3/5 bg-white px-12 lg:px-0 pt-6 lg:pt-5 lg:pl-[60px]">
        <div class="lg:w-[70%] font-bold text-[32px] lg:text-[40px] lg:mb-[10px]">
            <h2><?php echo $title; ?></h2>
        </div>

        <div class="lg:w-[80%] text-primary text-[16px] lg:text-[32px] font-normal leading-[170%]">
            <?php echo $heading; ?>
        </div>

        <div class="bg-white pt-6 lg:py-5 lg:pr-[100px]">
            <div class="text-[16px] lg:text-xl font-normal leading-[170%]">
                <?php echo $content; ?>
            </div>

            <div class="[&>:not(:last-child)]:border-b">

                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-6 border-y border-primary lg:py-5">
                    <div class="flex flex-col lg:flex-row items-center relative">
                        <div class="relative text-[56px] lg:text-[96px] leading-[170%] mr-0 lg:mr-5 inline-block 
                            bg-gradient-to-r from-secondary to-primary text-transparent bg-clip-text">
                            <?php echo $percent; ?>
                        </div>
                        <div class="flex leading-[170%] text-[20px] lg:text-2xl text-primary font-bold mb-5 lg:mb-0">
                            <strong><?php echo $percent_content; ?></strong>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Image section -->
    <div class="lg:w-3/5 pt-[40px] lg:py-0 lg:absolute left-0 top-0 h-full overflow-hidden">
        <div class="flex items-end h-full">
            <img class="object-cover h-auto lg:h-[636px] w-full lg:w-[96%]" src="<?php echo $image_url; ?>" alt="" />
        </div>
    </div>

</div>
