<?php
/*
Template Name: Menu Only
*/
/*
This is used as "hack" to show only the menu -- so it can be iframed or consumed by external sites.

To use, make a new WordPress page and use the "menu only" template.
*/
// get_header();
?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="menu-only">

<header id="masthead" class="masthead" data-sticky data-options="marginTop: 0">
  <div class="masthead-inner row">
    <div class="columns medium-2 small-4 log-column" id="local-title">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Back to <?php bloginfo( 'name' ); ?> homepage"><img src="https://ebiwd.github.io/pdx-visual-framework/images/logo.png" class="padding-15"/></a></h1>
    </div>
    <!-- Desktop Menu-->
    <div class="columns medium-10 menu-column padding-vertical-30 hide-for-small-only" id="local-nav">
      <nav id="main-menu" class="navigation" role="navigation">
        <?php pdxtheme_top_bar_r(); ?>
      </nav>
    </div>
    <!-- Mobile Menu -->
    <div class="columns small-8 show-for-small-only padding-vertical-15 text-right" data-responsive-toggle="mobile-menu" data-hide-for="medium">
      <a class="menu-toggle"><i class="icon icon-functional" data-icon="M"  data-toggle="mobile-menu"></i></a>
    </div>

    <div class="columns">
      <?php
      if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) :
      ?>
        <?php
        get_template_part( 'template-parts/mobile-top-bar' );
        ?>
      <?php
      endif;
      ?>
    </div>
  </div>
</header>

<?php the_content(); ?>

</div>
