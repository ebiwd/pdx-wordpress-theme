<?php
/*
Template Name: Front
*/
get_header(); ?>


<?php do_action( 'pdxtheme_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="pdxtheme-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
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
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'pdxtheme_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>




<?php get_footer();
