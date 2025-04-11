<?php
$title = $args['title'] ?? 'Default Title';
$cta_link  = $args['cta_link'] ?? '#';
$cta_text = $args['cta_text'] ?? 'Submit';
$image_url = $args['image_url'] ?? '';
?>

<div class="container">
    <h1 class="text-[36px] lg:pt-[100px] mb-6 lg:w-7/12">
        <?php echo $title ?>
    </h1>

    <form class="relative pt-[60px] lg:pt-[100px]">
        <div class="flex flex-col lg:flex-row w-full">
            <!-- FORM -->
            <!-- todo move form to src, to handle script on frontend -->
            <!-- using form component to handle form submit, validate and others from events -->
            <div class="w-full lg:w-1/2">
                <div class="flex flex-col gap-4 text-[20px] lg:w-[555px]">
                    <input type="text" name="firstName" placeholder="First Name*" required class="border border-black p-2 ">
                    <input type="text" name="lastName" placeholder="Last Name*" required class="border border-black p-2 ">
                    <input type="email" name="email" placeholder="Email*" required class="border border-black p-2 ">
                    <input type="text" name="jobTitle" placeholder="Job Title*" required class="border border-black p-2 ">
                    <input type="tel" name="phoneNumber" placeholder="Phone Number*" required class="border border-black p-2 ">
                    <input type="text" name="company" placeholder="Company/Organization*" required class="border border-black p-2 ">

                    <select name="country" required class="border border-black p-2 ">
                        <option value="">Country*</option>
                        <option value="us">United States</option>
                        <option value="vn">Vietnam</option>
                        <option value="jp">Japan</option>

                    </select>

                    <textarea name="message" placeholder="Your Message*" required class="border border-black p-2 h-24"></textarea>

                    <div class="flex items-start gap-2">
                        <input type="checkbox" name="consent" required>
                        <label class="text-xs">I agree to Datum collecting and processing my personal data to allow me to receive information on Datum services.</label>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex justify-center items-start relative -mt-[20px]">
                <img src="<?php echo $image_url; ?>" class="max-w-[80%] lg:max-w-[60%] object-contain" />
            </div>


        </div>
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mt-4">
            <button type="submit">
                Submit
            </button>
            <div class="text-xs text-center font-bold flex-1">Please complete this form and a member of our team will be in touch.</div>
        </div>
</form>


