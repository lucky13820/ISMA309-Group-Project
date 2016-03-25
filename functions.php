<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function load_my_fonts() { 
	wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Lato:900|Source+Sans+Pro'); 	
	wp_enqueue_style( 'googleFonts');
 } 
 add_action('wp_print_styles', 'load_my_fonts');
?>
