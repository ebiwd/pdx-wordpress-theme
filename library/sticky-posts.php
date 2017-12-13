<?php
/**
 * Change the class for sticky posts to .wp-sticky to avoid conflicts with Foundation's Sticky plugin
 *
 * @package PDX Theme
 * @since PDX Theme 2.2.0
 */

if ( ! function_exists( 'pdxtheme_sticky_posts' ) ) :
function pdxtheme_sticky_posts( $classes ) {
	if ( in_array( 'sticky', $classes, true ) ) {
	    $classes = array_diff($classes, array('sticky'));
	    $classes[] = 'wp-sticky';
	}
	return $classes;
}
add_filter('post_class','pdxtheme_sticky_posts');

endif;
