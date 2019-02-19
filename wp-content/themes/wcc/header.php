<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _rebase
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php if (is_page('styleguide')) : ?>
        <meta name="robots" content="noindex, nofollow"/>
    <?php endif; ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php /* Header 16 Start | JeffW: Modified far right button to work with Base Blocks plugin */ ?>
  <header class="site-header">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo@2x.png" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav3">
          <?php
          wp_nav_menu(array(
              'theme_location'  => 'primary',
              'menu_class'      => 'navbar-nav ml-auto',
              'depth'           => 2,
              'container'       => '',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker()
          ));
          ?>
          <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
          <?php if ( is_plugin_active( 'reaction/baseblocks.php' ) ) { ?>
            <a class="btn btn-white btn-empty ml-md-3" href="<?php echo bloginfo('url'); ?>/baseblock/index">Base Blocks</a>
          <?php } ?>
        </div>
      </nav>
    </div>
  </header>
  <?php /* Header 06 End */ ?>

<div class="main-wrapper">
