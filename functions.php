<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}




// Custom Taxonomy Code
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'animationcat', 'animation', array( 'hierarchical' => true, 'label' => 'Animation', 'query_var' => true, 'rewrite' => true ) );
    register_taxonomy( 'filmcat', 'film', array( 'hierarchical' => true, 'label' => 'Film', 'query_var' => true, 'rewrite' => true ) );
}


?>
