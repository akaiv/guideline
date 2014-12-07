<?php
$url  = akaiv_get_post_meta( 'url' );
$desc = akaiv_get_post_meta( 'data-description' );

if ( ! empty($url) ) : ?>
  <a href="<?php echo $url; ?>" target="_blank"><?php akaiv_the_title(); ?></a><?php
  how_data_url_host_name( $url );
else :
  akaiv_the_title();
endif;

if ( $desc ) : ?>
  <p class="text-light"><?php echo $desc; ?></p><?php
endif; ?>
