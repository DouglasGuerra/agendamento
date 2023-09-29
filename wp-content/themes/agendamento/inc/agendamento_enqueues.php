<?php

function agendamento_scripts(){

    // BOOTSTRAP ESTILOS
    wp_enqueue_style('menu-bs-style', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bs-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), '1.0', 'all');

    // BOOTSTRAP JS
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), null, true);
    wp_enqueue_script( 'agendamento-script', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js' , array(), null, true);

    // ESTILO PRINCIPAL DO TEMA '/style.css'
    wp_enqueue_style('agendamento-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all');
}

add_action('wp_enqueue_scripts', 'agendamento_scripts');