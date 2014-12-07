<?php
/* 자료 (분류 순) */
$args = array (
  'post_type'   => 'data',
  'numberposts' => -1,
  'meta_key'    => 'wpcf-data-cat',
  'orderby'     => 'meta_value post_title',
  'order'       => 'ASC',
  'meta_query'  => array(array('key' => '_wpcf_belongs_guideline_id', 'value' => $id))
);
$data = new WP_Query( $args );

if ( $data->have_posts() ) : ?>
  <ul><?php
    while ( $data->have_posts() ) : $data->the_post();
      $cat = akaiv_get_post_meta( 'data-cat' );
      if ( ! isset($current_cat) || $current_cat !== $cat )
        echo '<h3>'.$cat.'</h3>'; ?>
      <li><?php get_template_part( 'templates/content', get_post_type() ); ?></li><?php
      $current_cat = $cat;
    endwhile; ?>
  </ul><?php
endif;
wp_reset_postdata(); ?>
