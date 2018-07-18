<div class="post-date"><?php the_date(); ?></div>
<?php include(get_template_directory() . "/php/util.php"); get_post_categories(); ?>
<h1 class="post-title padding-top-xs underline-light"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

<?php the_content(); ?>
