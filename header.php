<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="shortcut icon" href="favicon.ico">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <!--Link to our style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class= "container header">
        <div class="row">
          <div class="three columns">
              <?php dynamic_sidebar('logo-image'); ?>
          </div>

          <div class="nine columns">
            <?php wp_nav_menu(array(
              'theme_location' => 'header-menu',
              'container-class' => 'menu-header'
            ));
          ?>
          </div>
        </div>

      </div>
    </header>
