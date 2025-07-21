<?php
$current_lang = $_COOKIE['datum_lang'] ?? 'en';
$langs = [
    'en' => 'EN',
    'vi' => 'VI'
];

// Hàm tạo URL giữ nguyên các tham số khác, chỉ đổi lang
function datum_lang_url($lang) {
    $params = $_GET;
    $params['lang'] = $lang;
    return strtok($_SERVER["REQUEST_URI"], '?') . '?' . http_build_query($params);
}
?>
<div class="items-center space-x-5 font-bold hidden ipadpro:hidden ipadproplus:flex relative mt-2 lg:mx-20">
    <div class="menu flex items-center  group relative">
        <svg width="17" height="17" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.49804 17.5C6.15389 17.5 4.02819 16.549 2.48764 15.0085C0.951635 13.4725 0 11.3468 0 8.99804C0 6.65389 0.950956 4.52819 2.48764 2.98764C4.02828 1.45164 6.15389 0.5 8.49804 0.5C10.8468 0.5 12.9725 1.45096 14.5085 2.98764C16.0491 4.52828 17 6.65389 17 8.99804C17 11.3468 16.049 13.4725 14.5085 15.0085C12.9725 16.5491 10.8468 17.5 8.49804 17.5ZM3.42587 14.0694C3.93124 14.5787 4.51162 15.0077 5.14714 15.3444C5.0462 15.1883 4.94924 15.0289 4.85695 14.8603C4.10323 13.4963 3.61116 11.678 3.52283 9.66195H1.3553C1.51136 11.3793 2.27304 12.9199 3.42593 14.0687L3.42587 14.0694ZM3.42587 3.9257C2.27238 5.0792 1.51064 6.61921 1.35525 8.3364H3.52277C3.6111 6.32035 4.10384 4.50201 4.8569 3.13809C4.9492 2.96941 5.04616 2.80539 5.14709 2.65397C4.51157 2.99066 3.93052 3.42031 3.42582 3.92501L3.42587 3.9257ZM13.5695 3.9257C13.0642 3.42034 12.4878 2.99136 11.8483 2.65467C11.9492 2.80608 12.0462 2.97011 12.1385 3.13878C12.8922 4.50278 13.3843 6.32104 13.4772 8.3371H15.6408C15.4848 6.61974 14.7231 5.07918 13.5702 3.9264L13.5695 3.9257ZM13.5695 14.0694C14.723 12.9205 15.4848 11.3799 15.6402 9.66258H13.4765C13.3842 11.6786 12.8915 13.497 12.1378 14.8609C12.0455 15.0296 11.9485 15.1889 11.8476 15.345C12.4871 15.0083 13.0642 14.5787 13.5689 14.07L13.5695 14.0694ZM7.83657 16.0477V9.66258H4.84828C4.9366 11.4469 5.36626 13.0427 6.01837 14.2207C6.52373 15.1384 7.15061 15.7865 7.83653 16.0475L7.83657 16.0477ZM7.83657 8.33657V1.95148C7.15058 2.21246 6.52303 2.86059 6.0184 3.77372C5.36629 4.95642 4.93663 6.55155 4.84831 8.33657H7.83657ZM9.16272 1.95148V8.33657H12.1471C12.0628 6.55223 11.6291 4.95642 10.977 3.77372C10.4716 2.86063 9.84473 2.2125 9.16272 1.95148ZM9.16272 9.66258V16.0477C9.84471 15.7867 10.4716 15.1386 10.977 14.2208C11.6291 13.0421 12.0627 11.4471 12.1471 9.66275L9.16272 9.66258Z" fill="white"/>
        </svg>
        <div>
            <span id="current-lang" class="cursor-pointer p-2"><?php echo $langs[$current_lang]; ?></span>
        </div>
        <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg" style="cursor:pointer;">
            <path d="M4 5L0.535899 0.499999L7.4641 0.5L4 5Z" fill="white"/>
        </svg>
        <div class="ml-2">
            <ul class="absolute right-0 top-6 <?php echo $current_lang === 'en' ? 'px-3 py-2 z-50' : ''; ?> hidden group-hover:block">
                <?php foreach ($langs as $code => $label): ?>
                    <?php if ($code !== $current_lang): ?>
                        <li class="relative group bg-secondary/10 hover:bg-secondary/20 border-b border-primary text-white ">
                            <a href="<?php echo htmlspecialchars(datum_lang_url($code)); ?>" class="block px-4 py-2 font-bold "><?php echo $label; ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>