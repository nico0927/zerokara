<?php get_header(); ?>

      <article>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        <?php endwhile; else: ?><!-- 記事がない場合 -->
          <h2>記事が見つかりません。</h2>
          <p>お探しの記事は削除されたか、何らかの理由によって表示できません。</p>
        <?php endif; ?>
      </article>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
