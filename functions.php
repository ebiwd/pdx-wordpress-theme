<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * PDX Theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package PDX Theme
 * @since PDX Theme 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-pdxtheme-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-pdxtheme-top-bar-walker.php' );
require_once( 'library/class-pdxtheme-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

// function modify_read_more_link() {
//   return '<a class="readmore" href="' . get_permalink() . '">Read more</a>';
// }
// add_filter( 'the_content_more_link', 'modify_read_more_link' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-pdxtheme-protocol-relative-theme-assets.php' );

// add .active to to menu items
// via: https://stackoverflow.com/questions/26789438/how-to-add-active-class-to-wp-nav-menu-current-menu-item-simple-way
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
