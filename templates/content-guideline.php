<?php akaiv_before_post(); ?>

<?php $top_level = ( 0 === $post->post_parent ); ?>

<?php if ( ! is_singular() ) : ?>

  <h1 class="stage-title">
    <a class="box" href="<?php echo esc_url(get_permalink()); ?>">
      <?php akaiv_the_title(); ?>
    </a>
  </h1>

  <div class="stage-content">
    <?php get_template_part( 'templates/loop', 'stage' ); /* 스테이지: 하위 가이드라인 */ ?>
  </div>

<?php else : ?>

  <header class="entry-header">
    <h1 class="entry-title">
      <?php akaiv_the_title(); ?>
    </h1>
    <div class="entry-meta text-right">
      <?php akaiv_entry_meta( 'date', 'fa-clock-o' ); ?>
      <?php akaiv_edit_post_link( false, 'fa-pencil' ); ?>
    </div>
  </header>

  <?php if ( $top_level ): ?>
    <div class="entry-content">
      <?php get_template_part( 'templates/loop', 'stage' ); /* 스테이지: 하위 가이드라인 */ ?>
    </div>

  <?php else : ?>
    <div class="box">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="entry-footer">
      <div class="data">
        <?php get_template_part( 'templates/loop', 'data' ); ?>
      </div>
    </div>

  <?php endif; ?>

<?php endif; ?>

<?php akaiv_after_post(); ?>
