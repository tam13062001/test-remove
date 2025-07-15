<?php
$title = $attributes['title'] ?? '';
$teams = $attributes['teams'] ?? [];
$defaultActiveKey = $attributes['defaultActiveKey'] ?? '';
$emptyMessage = $attributes['emptyMessage'] ?? 'No members in this group';

$data = [
  'teams' => $teams,
  'defaultActiveKey' => $defaultActiveKey,
  'emptyMessage' => $emptyMessage
];
?>
<div class=" ">
    <div class="container">
        <div class="flex pt-[60px] lg:pt-[93px] lg:w-[823px]">
            <div class="text-[24px] lg:text-[36px] font-normal lg:leading-[170%] text-black">
                <div>
                    <?php echo esc_html($title); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=" mt-[-100px] pb-[146px]" ></div>
<?php
render_rocket_block('member', $data);
