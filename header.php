<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package PDX Theme
 * @since PDX Theme 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <link rel="apple-touch-icon" sizes="180x180" href="https://ebiwd.github.io/pdx-visual-framework/images/favicons/apple-touch-icon.png?v=1">
    <link rel="icon" type="image/png" sizes="32x32" href="https://ebiwd.github.io/pdx-visual-framework/images/favicons/favicon-32x32.png?v=1">
    <link rel="icon" type="image/png" sizes="16x16" href="https://ebiwd.github.io/pdx-visual-framework/images/favicons/favicon-16x16.png?v=1">
    <link rel="manifest" href="https://ebiwd.github.io/pdx-visual-framework/images/favicons/manifest.json?v=1">
    <link rel="mask-icon" href="https://ebiwd.github.io/pdx-visual-framework/images/favicons/safari-pinned-tab.svg?v=1" color="#0032a0">
    <link rel="shortcut icon" href="https://ebiwd.github.io/pdx-visual-framework/images/favicons/favicon.ico?v=1">
    <meta name="apple-mobile-web-app-title" content="PDX Finder">
    <meta name="application-name" content="PDX Finder">
    <meta name="msapplication-config" content="https://ebiwd.github.io/pdx-visual-framework/images/favicons/browserconfig.xml?v=1">
    <meta name="theme-color" content="#0032a0">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div content="content-wrapper">
  <div id="skip-to">
    <a href="#content">Skip to main content</a>
  </div>

  <?php do_action( 'pdxtheme_after_body' ); ?>

  <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
  <?php endif; ?>

  <?php do_action( 'pdxtheme_layout_start' ); ?>

  <div data-sticky-container>
    <header id="masthead" class="masthead" data-sticky data-options="marginTop: 0">
      <div class="masthead-inner row">
        <div class="columns medium-2 small-4 log-column" id="local-title">
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Back to <?php bloginfo( 'name' ); ?> homepage"><img src="https://ebiwd.github.io/pdx-visual-framework/images/logo.png" class="padding-15"/></a></h1>
        </div>
        <!-- Desktop Menu-->
        <div class="columns medium-10 menu-column padding-vertical-30 hide-for-small-only" id="local-nav">
          <nav id="main-menu" class="navigation" role="navigation">
            <?php pdxtheme_top_bar_r(); ?>
            <?php
            //if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) :
            ?>
              <?php
              //get_template_part( 'template-parts/mobile-top-bar' );
              ?>
            <?php
          // endif;
          ?>
          </nav>
        </div>
        <!-- Mobile Menu -->
        <div class="columns small-4 show-for-small-only padding-vertical-15 text-right">
          <a class="menu-toggle"><i class="icon icon-functional" data-icon="M" data-toggle data-responsive-toggle="expand-menu"></i></a>
        </div>
      </div>
    </header>
  </div>

  <div id="content" role="main">

    <section class="container">
      <?php do_action( 'pdxtheme_after_header' );
