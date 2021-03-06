<?php
/*
Template Name: Full Width No Alteration
*/
/*
Why: Create a page where the HTML input isn't altered (such as javascipt wrapped in p tags)
How: use get_the_content() instead of the_content()
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'pdxtheme_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    <?php do_action( 'pdxtheme_page_before_entry_content' ); ?>
    <div class="entry-content">
        <?php print get_the_content(); ?>
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

</div>

<?php get_footer();
