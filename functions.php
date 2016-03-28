<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 * Load custom post type archive on home page
 *
 * Reference: http://www.wpaustralia.org/wordpress-forums/topic/pre_get_posts-and-is_front_page/
 * Reference: http://wordpress.stackexchange.com/questions/30851/how-to-use-a-custom-post-type-archive-as-front-page
 */
function prefix_downloads_front_page( $query ) {
    // Only filter the main query on the front-end
    if ( is_admin() || ! $query->is_main_query() ) {
    	return;
    }
    global $wp;
    $front = false;
	// If the latest posts are showing on the home page
    if ( ( is_home() && empty( $wp->query_string ) ) ) {
    	$front = true;
    }
	// If a static page is set as the home page
    if ( ( $query->get( 'page_id' ) == get_option( 'page_on_front' ) && get_option( 'page_on_front' ) ) || empty( $wp->query_string ) ) {
    	$front = true;
    }
    if ( $front ) :
        $query->set( 'post_type', 'animation' );
        $query->set( 'page_id', '' );
        // Set properties to match an archive
        $query->is_page = 0;
        $query->is_singular = 0;
        $query->is_post_type_archive = 1;
        $query->is_archive = 1;
    endif;
}
add_action( 'pre_get_posts', 'prefix_downloads_front_page' );

?>
