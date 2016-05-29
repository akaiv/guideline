<?php akaiv_before_post(); ?>

<?php akaiv_page_header(); ?>

<div class="box">
  <?php akaiv_post_thumbnail(); ?>

  <section class="page-content">
    <?php the_content(); ?>
  </section>
  <?php akaiv_edit_post_link( 'right' ); ?>
</div>

<?php akaiv_after_post(); ?>
