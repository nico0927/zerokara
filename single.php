<?php get_header(); ?>

      <article>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <h2>記事が見つかりません。</h2>
        <p>お探しの記事は削除されたか、何らかの理由によって表示できません。</p>
      <?php endif; ?>
      </article>

      <!-- 前次（記事名）表示 { -->
      <nav>
        <ul>
          <li><?php previous_post_link('%link'); ?></li>
          <li><?php next_post_link('%link'); ?></li>
        </ul>
      </nav>
      <!-- } 前次（記事名）表示 -->

      <aside>
        <h2>同じカテゴリーの記事</h2>
        <ul>
        <!-- 同じカテゴリーの記事を指定件数表示 { -->
        <?php
          $cat = get_the_category();
          $args = array('exclude'=>$post->ID, 'numberposts'=>5, 'category'=>$cat[0]->cat_ID);//件数とカテゴリースラッグを指定
          $myPosts = get_posts($args);
          foreach($myPosts as $post):
          setup_postdata($post);
        ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
          endforeach;
          wp_reset_postdata();
        ?>
        <!-- } 同じカテゴリーの記事を指定件数表示 -->
        </ul>
      </aside>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
