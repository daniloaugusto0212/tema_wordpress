<?php

define('INCLUDE_PATH', get_theme_root_uri() . '/tema_wordpress/');
define('HOME', 'http://localhost/wordpress/');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php

    wp_head(); /*Ativa metatags e e funcionalidades do painel WP*/

    $websiteName = 'Product Runt';
    $title = get_the_title();
    if ($title == '') {
        $title = 'Home';
    }

    ?>

    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?= INCLUDE_PATH ?>style.css">
    <link rel="icon" href="https://cursos.dankicode.com/app/Views/public/favicon.ico" type="image/x-icon" />
    <title><?= $websiteName . ' - ' . $title ?> </title>
</head>
<body>
    
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo">
                    <a href="<?= HOME ?>"><img src="<?= INCLUDE_PATH ?>img/home/pngs/logo.png" alt="Logomarca"></a>
                </div>
                <!-- /.logo -->
            </header>
            <div class="menu-desktop">
                <ul>
                    <li><a href="<?= HOME ?>">Home</a></li>
                    <li><a href="<?= HOME ?>sobre">Sobre</a></li>
                    <li><a href="<?= HOME ?>contato">Contato</a></li>
                </ul>
            </div>
            <!-- /.menu-desktop -->

            <div class="menu-mobile">
                <i class="fas fa-bars"></i>
                <ul>
                    <li><a href="<?= HOME ?>">Home</a></li>
                    <li><a href="<?= HOME ?>sobre">Sobre</a></li>
                    <li><a href="<?= HOME ?>contato">Contato</a></li>
                </ul>
            </div>
            <!-- /.menu-mobile -->