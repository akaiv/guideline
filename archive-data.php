<?php
get_header();
akaiv_before_content(); ?>

<?php akaiv_page_header(); ?>

<div class="page-content">
  <section class="data">
    <?php get_template_part( 'templates/loop', 'data' ); ?>
  </section>
</div>

<?php
akaiv_after_content();
get_footer();
