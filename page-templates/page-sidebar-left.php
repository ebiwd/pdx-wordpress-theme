<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-sidebar-left" role="main" class="row">

<?php do_action( 'pdxtheme_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h2 class="entry-title"><?php the_title(); ?></h2>
      </header>
      <?php do_action( 'pdxtheme_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
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
