<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ultra&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" class="logo">
    </header>
    <nav>
        <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'fallback_cb' => false
        )); ?>
    </nav>