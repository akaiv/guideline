<?php
if ( ! is_single() ) : $post_type = $post->post_type;
else : $id = get_the_ID();
endif;

$args = array (
  'post_parent' => $id,
  'post_type'   => $post->post_type,
  'orderby'     => 'menu_order',
  'order'       => 'ASC'
);
$guide = new WP_Query( $args );

if ( $guide->have_posts() ) :
  while ( $guide->have_posts() ) : $guide->the_post();
    get_template_part( 'templates/content', 'stage' );
  endwhile;
endif;
wp_reset_postdata();
