<?php
get_header();
akaiv_before_main();

if ( have_posts() ) :
  akaiv_page_header();
  while ( have_posts() ) : the_post();
    get_template_part( 'templates/content', get_post_type() );
  endwhile;
  akaiv_paginate_links();
else :
  get_template_part( 'templates/content', 'none' );
endif;

akaiv_after_main();
get_footer();
