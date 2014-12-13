<?php
/* 자료 (분류 순) */
$args = array(
  'post_type'   => 'data',
  'nopaging'    => true,
  'meta_key'    => 'wpcf-data-cat',
  'orderby'     => 'meta_value post_title',
  'order'       => 'ASC',
);
$is_guideline = is_singular( 'guideline' );
if ( $is_guideline )
  $args['meta_query'] = array(array('key' => '_wpcf_belongs_guideline_id', 'value' => $id));
$data = new WP_Query( $args );

if ( $data->have_posts() ) :
  if ( ! $is_guideline ) echo '<div class="row">';
  $i = 0;
  while ( $data->have_posts() ) : $data->the_post();
    $cat = akaiv_get_post_meta( 'data-cat' );
    $cat_h1 = '<h1 class="box data-cat-title">' . $cat . '</h1>';
    $cat_h3 = '<h3 class="data-cat-title">'     . $cat . '</h3>';

    if ( ! isset($current_cat) ) :
      if ( $is_guideline ) echo $cat_h3 . '<ul>';
      else echo '<div class="col-md-4">' . $cat_h1 . '<ul>';

    elseif ( $current_cat !== $cat ) :
      if ( $is_guideline ) :
        echo '</ul>' . $cat_h3 . '<ul>';
      else :
        if ( 2 !== $i % 3 ) echo '</ul></div><div class="col-md-4">' . $cat_h1 . '<ul>';
        else                echo '</ul></div></div><hr><div class="row"><div class="col-md-4">' . $cat_h1 . '<ul>';
      endif;
      $i++;

    endif; ?>

    <li><?php get_template_part( 'templates/content', get_post_type() ); ?></li><?php

    $current_cat = $cat;
  endwhile;
  echo '</ul>';
  if ( ! $is_guideline ) echo '</div></div><!-- .row -->';
endif;
wp_reset_postdata(); ?>
