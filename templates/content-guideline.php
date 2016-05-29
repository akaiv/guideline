<?php akaiv_before_post(); ?>

<?php $top_level = ( 0 === $post->post_parent ); ?>

<?php if ( ! is_singular() ) : ?>

  <h1 class="stage-title">
    <a class="box" href="<?php echo esc_url(get_permalink()); ?>">
      <?php akaiv_the_title(); ?>
    </a>
  </h1>

  <section class="stage-content">
    <?php get_template_part( 'templates/loop', 'stage' ); /* 스테이지: 하위 가이드라인 */ ?>
  </section>

<?php else : ?>

  <header class="entry-header">
    <h1 class="entry-title">
      <?php akaiv_the_title(); ?>
    </h1>
    <div class="entry-meta text-right">
      <?php akaiv_entry_meta( 'date' ); ?>
      <?php akaiv_edit_post_link( 'left', 'fa-pencil' ); ?>
    </div>
  </header>

  <?php if ( $top_level ): ?>
    <section class="entry-content">
      <?php get_template_part( 'templates/loop', 'stage' ); /* 스테이지: 하위 가이드라인 */ ?>
    </section>

  <?php else : ?>
    <div class="box">
      <section class="entry-content">
        <?php the_content(); ?>
      </section>
    </div>

    <footer class="entry-footer">
      <aside class="data">
        <?php get_template_part( 'templates/loop', 'data' ); ?>
      </aside>
    </footer>

  <?php endif; ?>

<?php endif; ?>

<?php akaiv_after_post(); ?>
