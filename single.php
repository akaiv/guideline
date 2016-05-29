<?php
get_header();
akaiv_before_main();

while ( have_posts() ) : the_post();
  get_template_part( 'templates/content', get_post_type() );
  get_template_part( 'templates/author-bio' );
endwhile;

akaiv_after_main();
get_footer();
