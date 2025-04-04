<?php
$items = array(
    array('title' => 'What is Cloud Computing?'),
    array('title' => 'What are the benefits of cloud computing?'),
    array('title' => 'Is cloud migration suitable for my business/enterprise application?'),
    array('title' => 'What are the costs involved in cloud adoption?'),
    array('title' => 'How does virtualized platform help in implementing cloud solutions?'),
    array('title' => 'What workloads can I move to the cloud?'),
    array('title' => 'What are the basic characteristics of cloud computing?'),
);
?>

<div class="container lg:py-[50px]">
    <h2 class="font-[700] text-[40px] mb-10 lg:mb-[110px]">
        Frequently Asked Questions
    </h2>
    <div class="mb-10 lg:mb-[60px]">
        <?php foreach ($items as $item): ?>
        <div class="py-6 border-b border-primary">
            <div class="flex items-center justify-between font-[700] text-primary space-x-5">
                <div>
                    <?php echo $item['title'] ?>
                </div>
                <i class="fa fa-arrow-right"></i>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="flex flex-col lg:flex-row lg:space-x-4 space-y-4 lg:space-y-0 lg:items-center">
        <a class="btn">
            More FAQs on our Cloud Services
        </a>
        <span class="text-[16px] text-secondary">
            or Schedule a consultation with our expert <i class="fa fa-chevron-right"></i>
        </span>
    </div>

</div>
