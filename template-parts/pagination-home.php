<div class="clearfix"></div>
<?php

$temp_query = $wp_query;
global $archive_query;//The query from the portfolio

if ( isset( $archive_query ) ) {
	$wp_query = $archive_query;
}
$pagination = get_the_posts_pagination( array(
    'prev_text'          => esc_attr__( 'Previous page', 'caos-child' ),
	'next_text'          => esc_attr__( 'Next page', 'caos-child' )
) );
if ($pagination) {
	echo '<div class="pagination_wrap">';
	echo wp_kses_post( $pagination );
	echo '</div><!-- /pagination_wrap -->';
}
$wp_query = $temp_query;
wp_reset_postdata();
?>
