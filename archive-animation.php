<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Caos
 */

get_header(); ?>

<?php

$terms = get_terms( 'animationcat' );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    echo '<ul id ="cat_nav" class="cat_nav">';
		echo '<li><a href="' . esc_attr(get_post_type_archive_link( 'animation' )) . '">'. All .'</a></li>';
    foreach ( $terms as $term ) {
        echo '<li><a href="' . esc_attr(get_term_link($term, $taxonomy)) . '" id="'. $term->name .'">' . $term->name . '</a></li>';
    }
    echo '</ul>';
}
?>


	<main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <div class="post-box-list">

                <?php if (have_posts()) :
                    $i=0; // counter
                    while(have_posts()) : the_post();
                        if($i%4==0) { // if counter is multiple of 4, put an opening div ?>
                        <!-- <?php echo ($i+1).'-'; echo ($i+4); ?> -->
                        <div class="row">
                        <?php } ?>
                        <?php
                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content-box', get_post_format() );
                        ?>
                        <?php $i++;
                        if($i%4==0) { // if counter is multiple of 4, put an closing div ?>
                        </div>
                        <?php } ?>
                    <?php endwhile; ?>
                        <?php
                        if($i%4!=0) { // put closing div here if loop is not exactly a multiple of 4 ?>
                        </div>
                        <?php } ?>
                <?php endif; ?>

            </div><!-- .post-box-list -->
            <?php get_template_part( 'template-parts/pagination', 'archive' ); ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

	</main><!-- #main -->

<?php get_footer(); ?>
