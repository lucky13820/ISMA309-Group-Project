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

<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>


</body>
</html>