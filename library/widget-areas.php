<?php
/**
 * Register widget areas
 *
 * @package PDX Theme
 * @since PDX Theme 1.0.0
 */

if ( ! function_exists( 'pdxtheme_sidebar_widgets' ) ) :
function pdxtheme_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'pdxtheme' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'pdxtheme' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>',
	));

  register_sidebar(array(
	  'id' => 'content-bottom-widgets-left',
	  'name' => __( 'Content bottom widgets (left)', 'pdxtheme' ),
	  'description' => __( 'Drag widgets to this content bottom left container', 'pdxtheme' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h4>',
	  'after_title' => '</h4>',
	));

  register_sidebar(array(
	  'id' => 'content-bottom-widgets-centre',
	  'name' => __( 'Content bottom widgets (centre)', 'pdxtheme' ),
	  'description' => __( 'Drag widgets to this content bottom centre container', 'pdxtheme' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h4>',
	  'after_title' => '</h4>',
	));

  register_sidebar(array(
	  'id' => 'content-bottom-widgets-right',
	  'name' => __( 'Content bottom widgets (right)', 'pdxtheme' ),
	  'description' => __( 'Drag widgets to this content bottom right container', 'pdxtheme' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h4>',
	  'after_title' => '</h4>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'pdxtheme' ),
	  'description' => __( 'Drag widgets to this footer container', 'pdxtheme' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h4>',
	  'after_title' => '</h4>',
	));
}

add_action( 'widgets_init', 'pdxtheme_sidebar_widgets' );
endif;
