<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caos
 */

?>
        <div class="clearfix"></div>
<?php if ( !is_single() ) { ?>            
</div><!-- /#container -->
<?php } ?>

<?php wp_footer(); ?>



</body>
</html>