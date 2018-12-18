<?php 

    function my_script() {
        wp_enqueue_script( 'my_script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20150330', true );

        wp_enqueue_script( '', get_template_directory_uri() . '/js/hamburger.js', array( 'jquery' ), '20150330', true );

        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', "", '' );
    }
    add_action( 'wp_enqueue_scripts', 'my_script' );
?>