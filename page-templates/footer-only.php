<?php
/*
Template Name: Footer Only
*/
/*
This is used as "hack" to show only the footer -- so it can be iframed or consumed by external sites.

To use, make a new WordPress page and use the "footer only" template.
*/
?>

<div id="footer-container">
  <footer id="footer">
    <?php do_action( 'pdxtheme_before_footer' ); ?>
    <div id="global-footer" class="global-footer row">
      <?php dynamic_sidebar( 'footer-widgets' ); ?>
    </div>
    <?php do_action( 'pdxtheme_after_footer' ); ?>
  </footer>
</div>
