<!DOCTYPE html>
<html lang="ja">
<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"content="<?php bloginfo('description')?>">
  <meta name="keywords" content="Webデザイン,Webサイト制作,ホームページ,ランティングページ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:url" content="yoshidesign.com">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description"content="<?php bloginfo('description')?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:image" content="">  
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Noto+Serif+JP:wght@400;700&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="header" id="header">
      <div class="header-wrapper">
        <div class="header-wrapper__ttl">
          <a href="<?php echo home_url(); ?>">
            <p><?php bloginfo('name'); ?></p>
          </a>
        </div>
        <nav class="header-wrapper__nav">
          <?php
          $args = array(
            'menu' => 'menu',
            'menu_class' => 'header-wrapper__nav__list',
            'container' => false,
          );
          wp_nav_menu($args);
          ?>
        </nav>
      </div>
    </div>
    <div class="drawer"></div>
  </header>