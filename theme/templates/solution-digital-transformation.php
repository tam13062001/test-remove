<?php /* Template Name: Solution: Digital Transformation Template */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/content/banner', array(
    'background_image' => get_assets_from_path('images/service-banner.png'),
    'title' => 'Empower your business with cutting-edge technology to stay ahead in the digital era.',
    'breadcrumbs' => array('Our Solution', 'Digital Transformation'),
)); ?>

<div class="h-[603px] relative">
    <img class="absolute top-0 object-cover h-full w-full" src="<?php echo get_assets_from_path('images/spe_banne.png')  ?>" />
    <div class="container relative flex items-center h-full">
        <div class="">
            <div class="font-[700] text-white">
                <div class="flex text-[14px] items-center space-x-2 mb-5">
                    <div>Our Solution</div>
                    <div>
                        <svg width="4" height="7" viewBox="0 0 4 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 3.5L0.25 6.53109L0.25 0.468911L4 3.5Z" fill="white"/>
                        </svg>
                    </div>
                    <div>Platform engineering</div>
                </div>
                <div class="text-[32px] lg:text-[40px]">
                    Platform engineering, the foundation for<br class="hidden lg:block" />
                    your digital transformation
                </div>
            </div>
        </div>
    </div>

</div>

<?php
get_template_part('template-parts/content/call-to-action', null, array(
    'content' => 'Empower your infrastructure with agility, scalability, security, and efficiency—boosting productivity while reducing overhead.',
    'image_url' => get_assets_from_path('images/cta_bg_2.png'),
    'cta_text' => 'Schedule a consultation with our expert',
    'cta_link' => '#'
));
?>

<?php get_template_part('template-parts/content/slide-building'); ?>

<?php
get_template_part('template-parts/content/info-section-list', null, array(
    'title' => 'Our platform engineer approach',
    'items' => array(
        array(
            'title' => 'CI/CD Pipelines',
            'content' => 'Automating the software delivery process to enable frequent and reliable code changes and releases.',
        ),
        array(
            'title' => 'Containerization and  <br class="hidden lg:block" /> Orchestration',
            'content' => 'Using technologies like Docker and Kubernetes to manage containers that encapsulate application components',
        ),
        array(
            'title' => 'API Management',
            'content' => 'Providing tools and services to create, manage, and secure APIs.',
        ),
        array(
            'title' => 'Infrastructure as Code  <br class="hidden lg:block" /> (IaC)',
            'content' => 'Managing and provisioning infrastructure through code instead of through manual processes.',
        ),
        array(
            'title' => 'Cloud-Native <br class="hidden lg:block" /> Development',
            'content' => 'Building and deploying applications that are designed to run in the cloud, taking full advantage of cloud computing benefits',
        ),
        array(
            'title' => 'DevSecOps',
            'content' => 'Integrating security practices within the DevOps process to ensure secure code development and deployment.',
        ),
        array(
            'title' => 'Monitoring and Logging
',
            'content' => 'Implementing systems that track application performance and user activities, providing insights into system health.',
        ),
        array(
            'title' => 'Security and Compliance',
            'content' => 'Ensuring that the platform adheres to security best practices and meets regulatory compliance requirements',
        ),
        array(
            'title' => 'Resilience',
            'content' => 'Designed to handle failure gracefully such as circuit breaking, graceful degradation, HA, DR ...',
        ),
        array(
            'title' => 'Microservices <br class="hidden lg:block" /> Architecture',
            'content' => 'Designing and implementing a microservices architecture to make applications more scalable and easier to develop.',
        ),
        array(
            'title' => 'Developer Portals and  <br class="hidden lg:block" /> Documentation',
            'content' => 'Creating comprehensive documentation and developer portals to improve the developer experience',
        ),
        array(
            'title' => 'Scalability',
            'content' => 'Designed to be easily scalable, allowing for quick and efficient horizontal scaling as demand increases',
        ),
    ),
)) ;
?>

<?php
get_template_part('template-parts/content/info-section-with-image', null, array(
    'title' => 'Why Datum',
    'image_url' => get_assets_from_path('images/WhyDatum-Solution.png'),
    'items' => array(
        array(
            'title' => ' Top-level experts',
            'content' => 'Our team consists of top-level professionals with specialized expertise, solution architects, designers, content strategists, software architects, and developers.',
        ),
        array(
            'title' => 'Industry specialized expertise',
            'content' => 'Ensure security and compliance standards in highly demanding industries such as digital banking while maintaining the platform’s scalability and agility.',
        ),
        array(
            'title' => 'Your partner in growth',
            'content' => 'Work closely with your team and other developers even after the platform completion to guarantee implementation and scale up according to your specific needs. ',
        )
    ),
)) ;
?>

<?php get_template_part('template-parts/content/successful-stories'); ?>
<?php get_template_part('template-parts/content/frequently-asked-questions'); ?>
<?php get_template_part('template-parts/content/Expert-insight'); ?>
<?php get_template_part('template-parts/content/team'); ?>

<?php get_footer(); ?>
