<?php get_header(); ?>

      <article>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        <?php endwhile; else: ?><!-- �L�����Ȃ��ꍇ -->
          <h2>�L����������܂���B</h2>
          <p>���T���̋L���͍폜���ꂽ���A���炩�̗��R�ɂ���ĕ\���ł��܂���B</p>
        <?php endif; ?>
      </article>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
