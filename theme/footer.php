<div class="py-[60px] lg:py-[122px]  w-full">
    <div class="container">
        <!-- Layout chính chia thành 2 cột -->
        <div class="flex flex-col lg:flex-row">
            <!-- Cột 1 - 1/5 width chỉ chứa logo -->
            <div class="lg:w-1/5 mb-9 lg:mb-0">
                <a href="/">
                    <img class="w-[142px]" alt="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo.png' ?>" />
                </a>
            </div>

            <!-- Cột 2 - 4/5 width chứa toàn bộ nội dung còn lại -->
            <div class="lg:w-4/5">
                <div class="mb-8">
                    <h3 class="font-Medium lg:text-[24px]">Your strategic partner in digital transformation</h3>
                </div>
                <!-- Phần menu 4 cột -->
                <?php get_template_part('template-parts/footer/menu'); ?>


                <!-- Đường kẻ ngang -->
                <div class="flex items-center">
                    <div class="border-t border-[#000000] w-full flex-grow"></div>
                </div>

                <!-- Phần Our Offices -->
                <div class="mt-10 mb-[100px]">
                    <div class="lg:text-[16px] font-bold font-[700] mb-4 uppercase">Our Offices</div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="flex flex-col justify-between gap-12 w-full">
                            <div class=" lg:text-[16px] text-[12px] space-y-2">
                                <h1 class=" font-bold text-[#2569ED] py-4">New Zealand</h1>
                                <h1 class=" font-bold text-[#000000]">Datum Limited</h1>
                                <p class="">70 Symonds Street Auckland</p>
                                <p class=""> <span class="text-[#2569ED] lg:ml-3">  </span> </p>
                                <p class=""> <span class="text-[#2569ED] lg:ml-5">  </span> </p>
                                <!-- <p class="">Phone: <span class="text-[#2569ED] lg:ml-3 "> 61-3-1234 5678 </span> </p>
                                <p class="">Email: <span class="text-[#2569ED] lg:ml-5 "> nz@datumhq.com </span> </p> -->
                            </div>
                            <div class="lg:text-[16px] text-[12px] space-y-2">
                                <h1 class=" font-bold text-[#2569ED] py-4">VietNam</h1>
                                <h1 class=" font-bold text-[#000000]">Datum Consulting VN Company LTD</h1>
                                <p class="">52B2, Sala Residential Area, District 2. HCMC</p>
                                <p class="">Phone: <span class="text-[#2569ED] lg:ml-3">  02822150050 </span> </p>
                                <p class="">Email: <span class="text-[#2569ED] lg:ml-5"> contacts@datumhq.com </span> </p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between gap-12 w-full">
                            <div class="lg:text-[16px] text-[12px] space-y-2">
                                <h1 class=" font-bold text-[#2569ED] py-4">Australia</h1>
                                <h1 class=" font-bold text-[#000000]">Datum Consulting AU PTY </h1>
                                <p class="">8 Beulah Road, Norwood, Adelaide</p>
                                <p class=""> <span class="text-[#2569ED] lg:ml-3">  </span> </p>
                                <p class=""> <span class="text-[#2569ED] lg:ml-5">  </span> </p>
                                <!-- <p class="">Phone: <span class="text-[#2569ED] lg:ml-3"> 61-3-1234 5678 </span> </p>
                                <p class="">Email: <span class="text-[#2569ED] lg:ml-5"> aus@datumhq.com </span> </p> -->
                            </div>
                            <div class="lg:text-[16px] text-[12px] space-y-2">
                                <h1 class=" font-bold text-[#2569ED] py-4">Philippines</h1>
                                <h1 class=" font-bold text-[#000000]">Datum Consulting Philippines, Inc.</h1>
                                <p class="">8 Rockwell Dr, Makati, Metro Manila</p>
                                <p class=""> <span class="text-[#2569ED] lg:ml-3">  </span> </p>
                                <p class=""> <span class="text-[#2569ED] lg:ml-5">  </span> </p>
                                <!-- <p class="">Phone: <span class="text-[#2569ED] lg:ml-3"> 848 1234 5678 </span> </p>
                                <p class="">Email: <span class="text-[#2569ED] lg:ml-5"> ph@datumhq.com </span> </p> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phần privacy menu -->
                <div class="flex lg:justify-between py-0 box-border max-w-full mt-10">
                    <?php get_template_part('template-parts/footer/privacy-menu'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>