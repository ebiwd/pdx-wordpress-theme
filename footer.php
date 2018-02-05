<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package PDX Theme
 * @since PDX Theme 1.0.0
 */

?>

      </section>
      <section class="background-color-dark-white margin-top-30">
        <div id="content-bottom" class="content-bottom row">
          <h2 class="uppercase margin-top-40 columns small-12 title-icon-updates">News and Events</h2>
          <div class="columns medium-4 margin-top-large">
            <?php dynamic_sidebar( 'content-bottom-widgets-left' ); ?>
          </div>
          <div class="columns medium-4 margin-top-large">
            <?php dynamic_sidebar( 'content-bottom-widgets-centre' ); ?>
          </div>
          <div class="columns medium-4 margin-top-large">
            <?php dynamic_sidebar( 'content-bottom-widgets-right' ); ?>
          </div>
        </div>
      </section>
    </div>
    <div id="footer-container">
      <footer id="footer">
        <?php do_action( 'pdxtheme_before_footer' ); ?>
        <div id="global-footer" class="global-footer row">
          <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
        <?php do_action( 'pdxtheme_after_footer' ); ?>
      </footer>
    </div>

    <?php do_action( 'pdxtheme_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
    </div><!-- Close off-canvas wrapper inner -->
  </div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
</div><!-- Close content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'pdxtheme_before_closing_body' ); ?>
</body>
</html>
