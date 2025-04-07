<?php
$items = array(
    array(
        'title' => 'What is Cloud Computing?',
        'content' => 'Cloud computing is the delivery of computing services—such as storage, servers, databases, networking, and software—over the internet, enabling flexible and scalable IT solutions.'
    ),
    array(
        'title' => 'What are the benefits of cloud computing?',
        'content' => 'Cloud computing offers cost savings, scalability, enhanced security, remote accessibility, and automatic updates, helping businesses improve efficiency and agility.'
    ),
    array(
        'title' => 'Is cloud migration suitable for my business/enterprise application?',
        'content' => 'Cloud migration is ideal for businesses seeking scalability, cost-efficiency, and better performance. A cloud readiness assessment can help determine the best approach for your enterprise.'),
    array(
        'title' => 'What are the costs involved in cloud adoption?',
        'content' => 'Cloud costs depend on factors like infrastructure, storage, data transfer, and security needs. Pay-as-you-go pricing helps optimize expenses based on actual usage.'),
    array(
        'title' => 'How does virtualized platform help in implementing cloud solutions?',
        'content' => 'Virtualization enables efficient resource allocation, scalability, and flexibility, making it easier to deploy and manage cloud-based applications.'),
    array(
        'title' => 'What workloads can I move to the cloud?',
        'Common workloads include web applications, databases, analytics, DevOps environments, and enterprise software like CRM and ERP systems'),
    array(
        'title' => 'What are the basic characteristics of cloud computing?',
        'content' => 'Key characteristics include on-demand self-service, scalability, resource pooling, rapid elasticity, pay-per-use pricing, and broad network access.'),
);
?>

<div class="container lg:py-[50px]">
    <h2 class="font-[700] text-[40px] mb-10 lg:mb-[110px]">
        Frequently Asked Questions
    </h2>
    <div class="mb-10 lg:mb-[60px]">
        <?php foreach ($items as $item): ?>
            <div class="py-2 border-b border-primary">
                <?php render_rocket_block('collapse-block', $item); ?>
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
