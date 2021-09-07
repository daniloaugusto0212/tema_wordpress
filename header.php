<?php

define('INCLUDE_PATH', get_theme_root_uri() . '/tema_wordpress/');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
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
    <title>Tema Wordpress</title>
</head>
<body>
    
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><img src="<?= INCLUDE_PATH ?>img/home/pngs/logo.png" alt="Logomarca"></div>
                <!-- /.logo -->
            </header>
            <div class="menu-desktop">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </div>
            <!-- /.menu-desktop -->

            <div class="menu-mobile">
                <i class="fas fa-bars"></i>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </div>
            <!-- /.menu-mobile -->