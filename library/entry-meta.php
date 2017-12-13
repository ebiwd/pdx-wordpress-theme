<?php
/**
 * Entry meta information for posts
 *
 * @package PDX Theme
 * @since PDX Theme 1.0.0
 */

if ( ! function_exists( 'pdxtheme_entry_meta' ) ) :
	function pdxtheme_entry_meta() {
		/* translators: %1$s: current date, %2$s: current time */
		echo '<time class="updated float-left small secondary" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %1$s at %2$s.', 'pdxtheme' ), get_the_date(), get_the_time() ) . '</time>';
		echo '<cite class="float-left byline author">' . __( 'Written by', 'pdxtheme' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></cite>';
	}
endif;
