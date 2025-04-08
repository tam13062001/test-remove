<?php
$title = $args['title'] ?? '';
$members = $args['members'] ?? array();
$summembers = $args['summembers'] ?? array();
?>

<div class="container mb-[92px]">

    <h2 class="text-[40px] font-bold text-black ml-[155px] mt-[139px] mb-[131px]">
        <?php echo $title ?>
    </h2>

    <!-- Team Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach($members as $member): ?>

        <!-- Member  -->
        <div class="flex flex-col items-center">
            <!-- Replace with your image source -->
            <img src="<?php echo $member['image_url']?>" alt="<?php echo $member['name']?>"
                class="w-full object-cover mb-4" />

            <div class="ml-[30px] mt-4 flex flex-col items-start w-full">
                <div class="flex items-center gap-2">
                    <div class="">
                        <div class="w-[60px] h-1 bg-blue-600"></div>
                        <p>&nbsp;</p>
                    </div>

                    <div class="">
                        <h3 class="text-2xl font-bold text-primary">
                            <?php echo $member['name']?>
                        </h3>
                        <p class="text-xl text-black mb-2">
                            <?php echo $member['title']?>
                        </p>
                    </div>

                </div>

            </div>



        </div>

        <?php endforeach; ?>


    </div>

    <!-- 2 Grid -->
    <div class="container grid grid-cols-1 md:grid-cols-2 mt-[92px] ml-[155px]">

        <?php foreach($summembers as $member): ?>
        <!-- Column 1 -->
        <div class="max-w-[326px] text-left">

            <p class="text-[64px] font-bold text-black">
                <?php echo $member['number']?>
            </p>
            <p class="text-gray-700">
                <?php echo $member['description']?>
            </p>
        </div>
        <?php endforeach; ?>
        <!-- Column 1 -->
        <!-- <div class="max-w-[326px] text-left">

                <p class="text-[64px] font-bold text-black">
                    30+
                </p>
                <p class="text-gray-700">
                    Solution Architects &amp; Technical Leads
                </p>
            </div>

            
            <div class="max-w-[326px]">
                <p class="text-[64px] font-bold text-black">
                    120+
                </p>
                <p class="text-gray-700">
                    Cloud, AI, DevOps, and Software Engineering Specialists
                </p>
            </div> -->

    </div>

</div>