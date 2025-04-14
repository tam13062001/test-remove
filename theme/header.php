<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Datum</title>
</head>
<body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <?php
    $template_path = get_page_template();
    $loaded_from_valid_template = preg_match('/templates\/.*.php$/', $template_path);
    if ($loaded_from_valid_template === 1) {
        get_template_part('template-parts/header/header');
    } else {
        get_template_part('template-parts/header/header-sticky');
    }
    ?>


