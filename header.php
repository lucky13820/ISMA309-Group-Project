<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caos
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.min.css" type="text/css" rel="stylesheet" />

<!-- WP_Head -->
<?php wp_head(); ?>
<!-- End WP_Head -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<?php
//Check if Rest Api plugin is enable
$caos_rest_api_plugin = "false";
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( is_plugin_active( 'rest-api/plugin.php' ) ){
    $caos_rest_api_plugin = "true";
}
?>
<body <?php body_class(); ?> data-name="<?php echo bloginfo( 'name' ); ?>" data-url="<?php echo esc_url( home_url( '/' ) ); ?>" data-rest-api="<?php echo $caos_rest_api_plugin; ?>">
    <?php
    $header_image = "";
    if ( get_header_image() ){
        $header_image = 'style="background-image: url(' . get_header_image() . ');"';
    }
    ?>
	<header id="header" class="site-header" role="banner" <?php echo $header_image; ?>>

        		<div class="logo_container col-md-5">
                    <?php
                    $logo = wp_get_attachment_image_src( absint( get_theme_mod( 'caos_logo' ) ), 'full' );
                    $logo = $logo[0];
                    ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="ql_logo"><?php if ( !empty( $logo ) ) : echo '<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/03/Group.png" title="Home" alt="home" />'; else: bloginfo( 'name' ); endif; ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="ql_logo"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/03/Group.png" /></a></p>
					<?php endif; ?>
                </div><!-- /logo_container -->

                <button id="ql_nav_btn" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ql_nav_collapse" aria-expanded="false">
                    <i class="fa fa-navicon"></i>
                </button>


                <div class="col-md-7">
                	<div class="collapse navbar-collapse" id="ql_nav_collapse">
                        <nav id="jqueryslidemenu" class="jqueryslidemenu navbar " role="navigation">
                            <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'menu_id' => 'primary-menu',
                                'depth'             => 3,
                                'menu_class'        => 'nav',
                                'fallback_cb'       => 'caos_bootstrap_navwalker::fallback',
                                'walker'            => new caos_bootstrap_navwalker()
                            ));
                            ?>
                        </nav>
                    </div><!-- /ql_nav_collapse -->
                </div><!-- /col-md-7 -->

                <div class="clearfix"></div>

	</header>
	<div class="clearfix"></div>

    <?php if ( !is_single() ) { ?>
    <div id="container" class="container">
    <?php } ?>
