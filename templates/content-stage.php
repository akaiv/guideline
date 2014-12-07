<?php akaiv_before_post(); ?>

<?php if ( is_home() ) : ?>

  <h2 class="stage-title">
    <a href="<?php echo esc_url(get_permalink()); ?>"><i class="fa fa-fw fa-file-text-o"></i></a>
    <?php akaiv_the_title(); ?>
  </h2>

<?php else : ?>

  <div class="row">
    <div class="col-md-3">
      <h1 class="stage-title">
        <a href="<?php echo esc_url(get_permalink()); ?>"><i class="fa fa-fw fa-file-text-o"></i></a>
        <?php akaiv_the_title(); ?>
      </h1>
    </div>

    <div class="col-md-6">
      <div class="box">
        <div class="stage-content">
          <?php the_content(); ?>
          <?php akaiv_edit_post_link( true ); ?>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="entry-footer">
        <div class="data">
          <?php get_template_part( 'templates/loop', 'data' ); ?>
        </div>
      </div>
    </div>
  </div><!-- .row -->


<?php endif; ?>

<?php akaiv_after_post(); ?>
