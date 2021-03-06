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
    <div class="featured-media">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('post-image'); ?>
            <?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>
                <div class="media-caption-container">
                    <p class="media-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
                </div>
            <?php endif; ?>
        </a>
    </div> <!-- /featured-media -->
    <div class="post-content">
        <div class="post-content-info">
            <div class="video-content">
                <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
                <p class="tagline"><?php the_field('tagline');?></p>
                <h2>Artist Statement</h2>
                <p class="artist-statement"><?php the_field('artist_statement');?></p>
                <h2>Synopsis</h2>
                <p class="synopsis"><?php the_field('project_description_synopsis');?></p>
                <h2>Biography</h2>
                <p class="biography"><?php the_field('biography');?></p>
            </div>
            <div class="artist-content">
                <div class="artist-photo">
                    <img src="<?php the_field('artist_photo'); ?>" alt="">
                </div>
                <p class="artist_name"><?php the_field('artist_name');?></p>
                <?php if( get_field('e-mail') ): ?>
                    <p class="e-mail"><?php the_field('e-mail') ?></p>
                <?php endif; ?>
                <?php if( get_field('personal_website') ): ?>
                    <p class="personal-site"><?php the_field('personal_website') ?></p>
                <?php endif; ?>
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

<script>
    jQuery(window).load(function(){
     jQuery('.artist-photo').find('img').each(function(){
      var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';
      jQuery(this).addClass(imgClass);
     })
    })
</script>
