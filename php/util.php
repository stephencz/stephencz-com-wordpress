<?php

function get_post_categories()
{
    global $post;

    $postcat = get_the_category($post->ID);

    if(!empty($postcat))
    {
      foreach($postcat as $cat)
      echo '<div class="post-category">' . $cat->name . '</div>';
    }
}

?>
