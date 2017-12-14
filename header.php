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
    <header id="masthead" class="masthead" data-sticky data-sticky-on="large" data-top-anchor="content:top" data-btm-anchor="content:bottom">
      <div class="masthead-inner row">
        <!-- local-title -->
        <div class="columns medium-12" id="local-title">
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </div>
        <!-- /local-title -->

        <!-- local-nav -->
        <nav id="main-menu" class="navigation" role="navigation">
          <?php pdxtheme_top_bar_r(); ?>
          <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
            <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
          <?php endif; ?>
        </nav>
        <!-- /local-nav -->
      </div>
    </header>
  </div>

  <div id="content" role="main" class="row">

    <section class="container">
      <?php do_action( 'pdxtheme_after_header' );
