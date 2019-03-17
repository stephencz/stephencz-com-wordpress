<?php
if (!is_admin()) {
  function wpb_search_filter($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    }
  return $query;
}

add_filter('pre_get_posts','wpb_search_filter');
}
?>
