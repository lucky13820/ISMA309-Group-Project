<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Caos
 */

get_header(); ?>


	<main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <div class="post-box-list">

							<?php

    // set up our archive arguments
    $archive_args = array(
      post_type => array( 'animation', 'film', 'installation' ),     // get only posts
        // this will display all posts on one page
    );

    // new instance of WP_Quert
    $archive_query = new WP_Query( $archive_args );

  ?>
                <?php if (have_posts()) :
                    $i=0; // counter
                    while ( $archive_query->have_posts() ) : $archive_query->the_post();
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
                            get_template_part( 'template-parts/content-box-student', get_post_format() );
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
