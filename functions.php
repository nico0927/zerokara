<?php
  /* head 内に余計なタグを書き出さないための設定 */
  remove_action('wp_head', 'wp_generator'); //バージョン情報は不要
  remove_action('wp_head', 'rsd_link'); //WordPress 以外からブログを編集しない
  remove_action('wp_head', 'wlwmanifest_link'); //Windows Live Writer を使用しない

  /* RSS リンクを有効化 */
  add_theme_support('automatic-feed-links');

  /*  カスタムメニューの登録 */
  add_theme_support('menus');

  /* 記事サムネイル画像を使用可能に */
  add_theme_support('post-thumbnails');
  //set_post_thumbnail_size(幅, 高さ, false); 画像を切り抜く場合はtrue を指定する

  /* read more リンクのリンク先を記事ページの先頭に */
  function remove_more_jump_link($link){
    $offset = strpos($link, '#more-');
    if($offset){
      $end = strpos($link, '"',$offset);
    }
    if($end){
      $link = substr_replace($link, '', $offset, $end-$offset);
    }
    return $link;
  }
  add_filter('the_content_more_link', 'remove_more_jump_link');

  /* ダイナミックサイドバー（ウィジェット）の登録 */
  register_sidebar(array(
    'name' => 'サイドバー名',
    'before_widget' => '<aside>',
    'after_widget' => '</aside>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));

  /* カスタム投稿タイプの設定 ==========
  register_post_type(
    '',
    array(
      'label' => 'ラベル名',
      'hierarchical' => true,//false ならタグ形式
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'menu_position' => 5,
      'supports' => array('title','editor','thumbnail','revisions'),
      'taxonomies' => array('','')
    )
  );
  ========== */

  /* カスタムタクソノミーの設定 ==========
  register_taxonomy(
    '','',
    array(
      'label' => '',
      'public' => true,
      'show_ui' => true,
      'hierarchical' => true,
    )
  );
  ========== */

  /* RSS 配信する投稿タイプを選択 ==========
  function custom_post_rss_set($query){
    if(is_feed()){
      $post_type = $query -> get('post_type');
      if(empty( $post_type )){
        $query -> set('post_type',array('',''));//配信に含めたい投稿タイプを書く
      }
      return $query;
    }
  }
  add_filter('pre_get_posts','custom_post_rss_set');
  ===== */
?>
