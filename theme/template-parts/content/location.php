<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? 'Default Content';
$image_url = $args['image_url'] ?? '';
$bg_image_url = $args['bg_image_url'] ?? '';
?>

<div class="relative lg:min-h-[880px] mb-20">

    <div class="lg:w-3/5 lg:absolute right-0 top-0 h-full overflow-hidden">
        <div class="flex items-end h-full">
            <img class="object-cover h-auto w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/img_8.png' ?>"  alt="" />
        </div>
    </div>
    
    <div class="container pt-[50px] lg:py-[100px] z-10 relative">
        <h1 class="text-4xl font-bold text-gray-900 mb-12">
            Location
        </h1>
    
        <div class="w-[1100px] ">
            <div class="bg-[#C4E1F5] p-8 ">
                <h2 class="text-2xl font-bold text-[#315CD4] mb-6 pb-4 border-b border-gray-200">
                    New Zealand
                </h2>
                
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Hamilton</h3>
                        <p class="text-gray-800">
                            The Meteor Theatre, 1 Victoria Street, Hamilton 3204
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-300 pb-6">
                        <h3 class="text-xl font-semibold mb-2">Auckland</h3>
                        <p class="text-gray-800">
                            70 Symonds Str, Auckland CBD, 1010
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-300 pb-6">
                        <h2 class="text-2xl font-bold text-[#315CD4] mb-4">
                            Australia
                        </h2>
                    </div>
                    
                    <div class="border-b border-gray-300 pb-6">
                        <h2 class="text-2xl font-bold text-[#315CD4] mb-4">
                            Vietnam
                        </h2>
                    </div>
                    
                    <div>
                        <h2 class="text-2xl font-bold text-[#315CD4]">
                            Philippines
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>