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

if ( $data->have_posts() ) :
  while ( $data->have_posts() ) : $data->the_post();
    $cat = akaiv_get_post_meta( 'data-cat' );
    if ( ! isset($current_cat) ) :
      echo '<h3 class="data-cat-title">'.$cat.'</h3><ul>';
    elseif ( $current_cat !== $cat ) :
      echo '</ul><h3 class="data-cat-title">'.$cat.'</h3><ul>';
    endif; ?>
    <li><?php get_template_part( 'templates/content', get_post_type() ); ?></li><?php
    $current_cat = $cat;
  endwhile;
  echo '</ul>';
endif;
wp_reset_postdata(); ?>
