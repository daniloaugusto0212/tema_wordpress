<?php

//Template Name: Helper

$br = '<br>';


//Retorna o título da página atual
echo get_the_title();

//Retorna o conteúdo da página atual
    the_content();

//Retorna o diretório de temas
echo get_theme_root_uri();

//Retorna diretório completo, incluindo pasta do tema
echo get_bloginfo('stylesheet_directory');


//Configurações do meu wordpress
echo bloginfo('title');
echo bloginfo('description');

//Retorna o conteudo do wordpress referenta ao header e ao footer
wp_head();
wp_footer();


//Inclui o header e o footer 
//get_header();
//get_footer();


//Verificar em que página estamos
get_the_title();

//Retorna o slug da página
global $post;
$post_slug = $post->post_name;
echo $post_slug;
