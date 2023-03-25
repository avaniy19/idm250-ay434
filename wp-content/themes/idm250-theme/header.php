<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  <title>idm250</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  // @link https://developer.wordpress.org/reference/functions/wp_body_open/
  // Fires the wp_body_open action.
  wp_body_open();
  ?>

<nav>
  <div class="logo">

    <a class href="https://avaniyata.com/idm250/">
      <span class="logo-text">starry Eyed</span>
      <div class="staricon">✶</div>
    </a>

  </div>
<div class="menu">
  <ul>
    <li class=menu-item><a href="https://avaniyata.com/idm250/horoscope/">horoscope</a></li>
    <li class=menu-item><a href="https://avaniyata.com/idm250/astrology/">astrology</a></li>
    <li class=menu-item><a href="https://avaniyata.com/idm250/zodiac/">zodiac</a></li>

    
    <!-- <li><a href="#">contact</a></li> -->
  </ul>
  </div>
</nav>
