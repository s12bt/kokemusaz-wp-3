<html>
  <head>
    <meta charset="utf-8" />
    <title>こけむさズWordPress部第3回回プレート</title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="screen">
  </head>

  <body>
  <?php wp_head(); ?>
  <!-- wrapper -->
  <div class="wrapper">

    <!-- header -->
    <div class="header">
      <a href="/wordpress">header</a>
    </div><!-- header end -->

    <div class="menu">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'topMenuBar',
          'container'       => '',
          'menu_class'      => '',
          'menu_id'         => '',
        ) );
      ?>
    </div>