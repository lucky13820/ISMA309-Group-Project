<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Caos
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-box'); ?> data-href="<?php the_permalink(); ?>">

	<div class="post-box-container">
        <div class="post-box-image" style="background-image: url(<?php the_field('poster'); ?>);"></div>
        <div class="post-box-text">
            <h2 class="post-box-title"><a rel="bookmark" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
            <span><?php the_field('duration') ?></span>
            <?php
            $categories_list = get_the_category_list( esc_html__( ', ', 'caos' ) );
			if ( $categories_list ) {
				printf( '<span class="post-box-meta">%1$s</span>', $categories_list ); // WPCS: XSS OK.
			}
            ?>
            <p><?php the_field('artist_name') ?></p>
            <p><?php the_field('tagline') ?></p>
            <div class="trailer_movie">
                <div class="trailer-button">
                    <a href="#" data-featherlight="#mylightbox">Trailer</a>
                    <div id="mylightbox">
                    
                       <video width="320" height="240" controls>
                           <source src="<?php echo $_GET['trailer']; ?>" type="video/mp4">
                           Your browser does not support the video tag.
                        </video>
                  
                    </div>
                </div>
               
                <p>Full Movie</p>
            </div>
        </div><!-- .post-box-text -->

        <div class="post-complete"></div><!-- .post-complete -->

    </div><!-- .post-box-container -->

</article><!-- #post-## -->
