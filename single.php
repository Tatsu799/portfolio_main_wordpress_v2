<?php
  $post = $wp_query->post;
  if ( in_category('works') ) {
    include(TEMPLATEPATH.'/single-works.php');
  }
  elseif ( in_category('news') ) {
    include(TEMPLATEPATH.'/single-news.php');
  }
  else {
    include(TEMPLATEPATH.'/single-default.php');
  }
?>