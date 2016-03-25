<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Caos
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $thumbnail_src = ""; ?>
	<?php if ( has_post_thumbnail() ) : ?>
		<?php
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'caos_post');
		$thumbnail_src = $thumbnail_src[0];
		?>
		<div class="post-image" style="background-image: url(<?php echo esc_url( $thumbnail_src ); ?>);"><span></span></div>
    <?php endif; ?>
		

    <div class="post-content">
    	<div class="post-content-video">
    	    <video class="trailer" autoplay="autoplay">
                <?php the_field('trailer');?>
            </video>
    	</div>
        <div class="post-content-info">
            <div class="video-content">
                <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
                <p class="tagline"><?php the_field('tagline');?></p>
                <h2>Artist Statement</h2>
                <p class="artist-statement"><?php the_field('artist_statement');?></p>
                <h2>Project Description</h2>
                <p class="project-description"><?php the_field('project_description_synopsis');?></p>
            </div>
            <div class="artist-content">
                <div class="artist-photo">
                    <img src="<?php the_field('artist_photo',12);?>" alt="">
                </div>
                <p class="artist_name"><?php the_field('artist_name');?></p>
            </div>
        </div>
    	<div class="entry">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caos' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<div class="clearfix"></div>	    
	</div><!-- /post_content -->

</article><!-- #post-## -->

