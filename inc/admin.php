<?php
/* 가이드라인 컬럼: 메뉴 순서, 슬러그 등 */
function guideline_columns($columns) {
  unset(
    $columns['title'],
    $columns['date']
  );
  $new_columns = array(
    'menu_order' => '순서',
    'title'      => '제목',
    'slug'       => '슬러그',
    'guideline_date'   => '일자',
    'guideline_status' => '상태',
  );
  return array_merge( $columns, $new_columns );
}
add_filter( 'manage_guideline_posts_columns', 'guideline_columns' );

function custom_guideline_column( $column, $post_id ) {
  global $post;
  switch ( $column ) {
    case 'menu_order':
      $order = $post->menu_order;
      echo $order;
      break;
    case 'slug':
      $slug = urldecode($post->post_name);
      echo $slug;
      if ( sanitize_title($slug) !== sanitize_title($post->post_title) )
        echo '<span class="dashicons dashicons-info error"></span>';
      break;
    case 'guideline_date':
      $date = get_the_date( 'Y-m-d' );
      echo $date;
      break;
    case 'guideline_status':
      $status = $post->post_status;
      echo $status;
      break;
  }
}
add_action( 'manage_guideline_posts_custom_column' , 'custom_guideline_column', 10, 2 );

/* 자료 컬럼: 자료 분류, URL, 부모 등 */
function data_columns($columns) {
  unset(
    $columns['title'],
    $columns['date']
  );
  $new_columns = array(
    'data_cat'    => '자료 분류',
    'title'       => '제목',
    'url'         => 'URL',
    'belongs_to'  => 'belongs to',
    'data_date'   => '일자',
    'data_status' => '상태',
  );
  return array_merge( $columns, $new_columns );
}
add_filter( 'manage_data_posts_columns', 'data_columns' );

function custom_data_column( $column, $post_id ) {
  global $post;
  switch ( $column ) {
    case 'data_date':
      $date = get_the_date( 'Y-m-d' );
      echo $date;
      break;
    case 'url':
      $url = akaiv_get_post_meta( 'url' );
      $slug = urldecode($post->post_name);
      echo '<a href="' . $url . '" target="_blank">' . $url . '</a>';
      if ( sanitize_title($slug) !== sanitize_title($post->post_title) )
        echo '<span class="dashicons dashicons-info error"></span>';
      break;
    case 'belongs_to':
      $belongs_to = get_post_meta( $post_id, '_wpcf_belongs_guideline_id', true );
      echo get_the_title($belongs_to);
      break;;
    case 'data_status':
      $status = $post->post_status;
      echo $status;
      break;
    case 'data_cat':
      $data_cat = akaiv_get_post_meta( 'data-cat' );
      echo $data_cat;
      break;
  }
}
add_action( 'manage_data_posts_custom_column' , 'custom_data_column', 10, 2 );
