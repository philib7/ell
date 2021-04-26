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

    <?php $logo = get_template_directory_uri().'/BuildFrontAsset/dist/images/logo.svg'; ?>

    <body id="body" <?php echo body_class(''); ?>>
        <header>
            <div class="container py-6">
                <div class="flex items-center">
                    <div>
                        <img src="<?php echo $logo; ?>" alt="" width="150px" class="logo">
                    </div>

                    <div class="ml-12 flex">
                        <div>Lien 1</div>
                        <div class="ml-4">Lien 2</div>
                        <div class="ml-4">Lien 3</div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main relative <?php if (is_front_page()) {echo 'home';} ?>">
