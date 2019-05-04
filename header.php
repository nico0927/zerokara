<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <?php
    wp_deregister_script('jquery');//WordPress 同梱のjQuery を使わない ※バージョン書き変え
    wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2');
  ?>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div><!-- ページ全体を括るラッパー { -->
    <header>
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

      <nav>
        <?php wp_nav_menu(array('menu' => 'メニュー名')); ?><!-- カスタムメニュー -->
      </nav>
    </header>

    <div><!-- メインコンテンツ部分とサイドバーを括るラッパー { -->
