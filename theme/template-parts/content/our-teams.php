<?php
$title = $args['title'] ?? '';
$members = $args['members'] ?? array();
$summembers = $args['summembers'] ?? array();
?>

<div class="container py-[92px]">

    <h2 class="text-[32px] lg:text-[40px] font-bold mb-[53px]"><?php echo $title; ?></h2>

    <!-- Team Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
        <?php foreach($members as $member): ?>

        <!-- Member  -->
        <div class="flex flex-col items-center">
            <!-- Replace with your image source -->
            <img src="<?php echo $member['image_url']?>" alt="<?php echo $member['name']?>"
                class="w-full object-cover lg:mb-4" />

            <div class="pl-[35px] mt-4 flex flex-col items-start w-full">
                <div class="flex items-center gap-5">
                    <div class="">
                        <div class="w-[60px] h-1 bg-blue-600"></div>
                        <p>&nbsp;</p>
                    </div>

                    <div class="">
                        <h3 class="text-xl lg:text-2xl font-bold text-primary">
                            <?php echo $member['name']?>
                        </h3>
                        <p class="text-[16px] lg:text-xl text-black">
                            <?php echo $member['title']?>
                        </p>
                    </div>

                </div>

            </div>



        </div>

        <?php endforeach; ?>


    </div>

    <!-- 2 Grid -->
    <div class="lg:container">
        <div class="grid grid-cols-2 mt-[40px] lg:mt-[92px] gap-6 lg:gap-0">

            <?php foreach($summembers as $member): ?>
            <!-- Column 1 -->
            <div class="text-left">

                <p class="text-[48px] lg:text-[64px] font-normal text-black pb-3">
                    <?php echo $member['number']?>
                </p>
                <p class="text-[16px] lg:text-xl leading-[170%] font-normal tracking-tighter">
                    <?php echo $member['description']?>
                </p>
            </div>
            <?php endforeach; ?>


        </div>
    </div>

</div>