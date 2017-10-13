<?php
function ajout_scripts() {

    // enregistrement d'un nouveau script
    wp_register_script('main_boot', get_template_directory_uri() . '/asset/js/bootstrap.min.js', array('jquery'),'1.1', true);
    wp_register_script('main_script', get_template_directory_uri() . '/asset/js/main.js', array(),'1.1', true);
    
    // appel du script dans la page
    wp_enqueue_script('main_boot');
    wp_enqueue_script('main_script');
    
    // enregistrement d'un nouveau style
    wp_register_style( 'boot_style', get_template_directory_uri() . '/asset/styles/bootstrap.min.css' );
    wp_register_style( 'main_style', get_template_directory_uri() . '/asset/styles/main.css' );
    
    // appel du style dans la page
    wp_enqueue_style( 'boot_style' );
    wp_enqueue_style( 'main_style' );
    
    }
    
    add_action( 'wp_enqueue_scripts', 'ajout_scripts' );