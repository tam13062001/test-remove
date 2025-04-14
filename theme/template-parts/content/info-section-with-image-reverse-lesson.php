<?php
$title = $args['title'] ?? '';
$heading = $args['heading'] ?? '';
$content = $args['content'] ??  '';
$image_url = $args['image_url'] ?? '';
?>

<div class="relative lg:min-h-[880px] lg:mb-[88px]">

    <!-- Ảnh bên trái -->
    <div class="lg:w-3/5 pt-[40px] lg:py-0 lg:absolute left-0 top-0 h-full overflow-hidden ">
        <div class="flex items-end h-full">
            <img class="object-cover h-auto lg:h-[636px] w-full lg:w-[96%]" src="<?php echo $image_url?>" alt="" />
        </div>
    </div>

    <div class="container pt-[40px] lg:pt-0 z-10 relative">
            
    <div class="relative lg:absolute top-0 right-0 lg:pt-[100px] lg:w-3/5 bg-white pt-6 lg:pt-5 lg:pl-[100px]">
            <div class="lg:w-[70%] font-bold text-[32px] lg:text-[40px] lg:mb-[10px] lg:mt-[130px]">
                <h2>
                    <?php echo $title ?>
                </h2>
            </div> 
            <div>
                <div class="lg:w-[80%] text-primary text-[16px] lg:text-[32px] font-normal leading-[170%]">
                    <?php echo $heading ?>
                </div>
            </div>
            <div class="lg:w-[80%] pt-6 lg:pt-5 text-[16px] lg:text-[20px] font-normal leading-[170%] lg:pb-[55px]">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
    
</div>
