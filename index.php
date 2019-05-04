<?php get_header(); ?>

  <!-- メインループ { -->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>
    </article>
  <?php endwhile; else: ?><!-- 記事がない場合 -->
    <article>
      <h2>記事が見つかりません。</h2>
      <p>お探しの記事は削除されたか、何らかの理由によって表示できません。</p>
    </article>
  <?php endif; ?>
  <!-- } メインループ -->

  <!-- 前次表示 { -->
  <nav>
    <ul>
      <li><?php previous_posts_link('前へ'); ?></li>
      <li><?php next_posts_link('次へ'); ?></li>
    </ul>
  </nav>
  <!-- } 前次表示 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
