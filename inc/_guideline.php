<?php
/* 자료 URL의 호스트 이름 */
function data_url_host_name( $url ) {
  $host_name = data_get_url_host_name( $url );
  if ( ! empty($host_name) )
    echo ' <span class="text-light">&#124; ' . $host_name . '</span>';
}
function data_get_url_host_name( $url ) {
  $host = parse_url($url)['host'];
  if ( array_key_exists('path', parse_url($url)) )
    $path = parse_url($url)['path'];
  if ( isset($path) && '/' === $path )
    $path = '';

  if ( false !== strpos($host, 'wikipedia.org') ) :
    $host_name = '위키피디아';
  elseif ( 'ref.akaiv.com' === $host && ! empty($path) ) :
    $host_name = '디자인 레퍼런스 아카이브';
  elseif ( 'tech.akaiv.com' === $host && ! empty($path) ) :
    $host_name = '기술 지식 아카이브';
  elseif ( false !== strpos($host, 'google.com') ) :
    if ( strpos($path, 'design') && '/design/' !== $path ) :
      $host_name = '구글 디자인 가이드라인';
    elseif ( false !== strpos($host, 'developers') ) :
      $host_name = 'Google Developers';
    endif;
  elseif ( false !== strpos($host, 'apple.com') ) :
    $host_name = 'iOS 휴먼 인터페이스 가이드라인';
  elseif ( false !== strpos($host, 'codex.wordpress.org') && ! empty($path) ) :
    $host_name = 'Codex';
  endif;

  if ( ! empty($host_name) )
    return $host_name;
}
