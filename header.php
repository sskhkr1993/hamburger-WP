<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="discription" content="ハンバーガーショップのサイト">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">  <!--つくってない-->
  <?php wp_head(); ?>
</head>


<body class="Wrapper" <?php body_class(); ?>>

  <header class="l-header">
    <button type="button" class="button js-button">
      Menu
    </button>
    <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
    </h1>
    <?php get_search_form(); ?>

  </header>

  <!--メニューの背景-->
  <div class="menu-background"></div>
  <!--サイドメニューpc-->

    <div class="menu__heading">
      Menu
    </div>
    <?php wp_nav_menu(); ?>