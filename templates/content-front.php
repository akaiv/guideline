<div class="page-content"><?php

  $args = array (
    'post_type'   => 'guideline',
    'post_parent' => 0,
    'orderby'     => 'menu_order',
    'order'       => 'ASC',
  );
  $guidelines = new WP_Query( $args );

  if ( $guidelines->have_posts() ) :
    $obj = get_post_type_object( 'guideline' );
    akaiv_page_header( $obj->labels->name ); ?>

    <div class="row"><?php
      $i = 0;
      while ( $guidelines->have_posts() ) : $guidelines->the_post(); ?>
        <div class="col-md-3">
          <?php get_template_part( 'templates/content', 'guideline' ); ?>
        </div><?php
        if ( 3 === $i % 4 && count($guidelines->posts) - 1 !== $i )
          echo '</div><hr><div class="row">';
        $i++;
      endwhile; ?>
    </div><?php

  else :
    get_template_part( 'templates/content', 'none' );

  endif;
  wp_reset_postdata(); ?>
</div>
