<?php akaiv_before_post(); ?>

<?php if ( ! is_single() ) : ?>

  <h2 class="stage-title">
    <a href="<?php echo esc_url(get_permalink()); ?>"><?php akaiv_the_title(); ?></a>
  </h2>

<?php else : ?>

  <div class="row">
    <div class="col-md-3">
      <h1 class="stage-title">
        <a href="<?php echo esc_url(get_permalink()); ?>"><?php akaiv_the_title(); ?></a>
      </h1>
    </div>

    <div class="col-md-6">
      <div class="box">
        <section class="stage-content">
          <?php the_content(); ?>
        </section>
        <?php akaiv_edit_post_link( true ); ?>
      </div>
    </div>

    <div class="col-md-3">
      <footer class="entry-footer">
        <aside class="data">
          <?php get_template_part( 'templates/loop', 'data' ); ?>
        </aside>
      </footer>
    </div>
  </div><!-- .row -->


<?php endif; ?>

<?php akaiv_after_post(); ?>
