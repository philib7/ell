<?php if ( !defined('ABSPATH')) exit; ?>
<!doctype html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <!-- TO DO -->
        <meta name="theme-color" content="">
        <title>Wp From Scratch</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- <link href="<?php echo get_template_directory_uri(); ?>/public/dist/images/favicon/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"> -->

        <!-- WordPress head -->
        <?php wp_head(); ?>
    </head>

    <body id="body" <?php echo body_class(''); ?>>
        <header>

        </header>
        <main class="main <?php if (is_front_page()) {echo 'home';} ?>">
