<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package PDX Theme
 * @since PDX Theme 1.0.0
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="page" role="main" class="row">

 <?php do_action( 'pdxtheme_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
   <?php
   	$mainClasses = array(
   		'main-content',
   		'columns',
   		'medium-8',
   	);
   ?>
   <article <?php post_class($mainClasses) ?> id="post-<?php the_ID(); ?>">
       <header>
         <h2 class="entry-title"><?php the_title(); ?></h2>
       </header>
       <?php do_action( 'pdxtheme_page_before_entry_content' ); ?>
       <div class="entry-content">
         <?php the_content(); ?>
         <?php edit_post_link( __( 'Edit', 'pdxtheme' ), '<span class="edit-link">', '</span>' ); ?>
       </div>
       <footer>
          <?php
            wp_link_pages(
              array(
                'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'pdxtheme' ),
                'after'  => '</p></nav>',
              )
            );
          ?>
          <p><?php the_tags(); ?></p>
       </footer>
       <?php do_action( 'pdxtheme_page_before_comments' ); ?>
       <?php comments_template(); ?>
       <?php do_action( 'pdxtheme_page_after_comments' ); ?>
   </article>
 <?php endwhile;?>

 <?php do_action( 'pdxtheme_after_content' ); ?>
 <?php get_sidebar(); ?>

 </div>

 <?php get_footer();
