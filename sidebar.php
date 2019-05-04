      <?php dynamic_sidebar('サイドバー名'); ?>

      <!-- 分岐タグまとめ ※便宜上ここにまとめているだけなので未使用時は削除 { -->
      <?php if(is_front_page() || is_home()): ?>
        <p>このメッセージはフロント（トップ）ページで表示されます。</p>
      <?php endif; ?>

      <?php if(is_archive()): ?>
        <p>このメッセージはカテゴリー・タグ・公開月など全てのアーカイブページで表示されます。</p>
      <?php endif; ?>

      <?php if(is_category()): ?>
        <p>このメッセージはカテゴリーアーカイブページで表示されます。</p>
      <?php endif; ?>

      <?php if(is_post_type_archive('投稿タイプ名')): ?>
        <p>このメッセージはカスタム投稿タイプのアーカイブページで表示されます。</p>
      <?php endif; ?>

      <?php if(is_tax('タクソノミー名')): ?>
        <p>このメッセージはタクソノミーアーカイブページで表示されます。</p>
      <?php endif; ?>

      <?php if(is_single()): ?>
        <p>このメッセージは投稿記事ページで表示されます。</p>
      <?php endif; ?>

      <?php if(is_page()): ?>
        <p>このメッセージは固定記事ページで表示されます。</p>
      <?php endif; ?>

      <?php if(is_search()): ?>
        <p>このメッセージは検索結果ページで表示されます。</p>
      <?php endif; ?>

      <?php if(is_404()): ?>
        <p>このメッセージは404 ページで表示されます。</p>
      <?php endif; ?>
      <!-- } 分岐タグまとめ ※便宜上ここにまとめているだけなので未使用時は削除 -->