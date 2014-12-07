<?php
get_header();
akaiv_before_content(); ?>

<?php
while ( have_posts() ) : the_post();
  get_template_part( 'templates/content', get_post_type() );
endwhile;
?>

<?php
akaiv_after_content();
get_footer();
