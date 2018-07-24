<?php

function get_post_categories()
{
    global $post;

    $postcat = get_the_category($post->ID);

    if(!empty($postcat))
    {
      echo '<ul class="tag-list">';

      foreach($postcat as $cat)
      {
        $name = $cat->name;
        echo '<li>' . '<a href="' . get_category_link(get_cat_ID($name)) . '">' . $name . '</a></li>';
      }

      echo '</ul>';
    }
}

?>
