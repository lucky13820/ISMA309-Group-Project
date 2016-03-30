<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Caos
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
        <div class="plugin-slider">
           <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
        </div>
        
    
       
	</main><!-- #main -->


<?php get_footer(); ?>
