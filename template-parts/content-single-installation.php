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
    <style>

    </style>
    <div class="container">
        <div id="slides">
            <?php if( get_field('supporting_image') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_image'); ?>);"></div>
            <?php endif; ?>
            <?php if( get_field('supporting_images_2') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_images_2'); ?>);"></div>
            <?php endif; ?>
            <?php if( get_field('supporting_image_3') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_image_3'); ?>);"></div>
            <?php endif; ?>
            <?php if( get_field('supporting_image_4') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_image_4'); ?>);"></div>
            <?php endif; ?>
            <?php if( get_field('supporting_image_5') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_image_5'); ?>);"></div>
            <?php endif; ?>
            <?php if( get_field('supporting_image_6') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_image_6'); ?>);"></div>
            <?php endif; ?>
            <?php if( get_field('supporting_image_7') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_image_7'); ?>);"></div>
            <?php endif; ?>
            <?php if( get_field('supporting_image_8') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_image_8'); ?>);"></div>
            <?php endif; ?>
            <?php if( get_field('supporting_image_9') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_image_9'); ?>);"></div>
            <?php endif; ?>
            <?php if( get_field('supporting_image_10') ): ?>
                <div class="slider-image" style="background-image: url(<?php the_field('supporting_image_10'); ?>);"></div>
            <?php endif; ?>
        </div>
    </div>
    <script>
        $(function() {
            $('#slides').slidesjs({
                width: 100,
                height: 56.25
            });
        });
    </script>
    <div class="post-content">
        <div class="post-content-info">
            <div class="video-content">
                <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
                <p class="tagline"><?php the_field('tagline');?></p>
                <h2>Artist Statement</h2>
                <p class="artist-statement"><?php the_field('artist_statement');?></p>
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
                <?php if( get_field('location') ): ?>
                     <p class="location"><?php the_field('location'); ?></p>
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
