<?php get_template_part( 'php/includes/header' ); ?>
<?php get_template_part( 'php/includes/nav' ); ?>


<div class="content-wrapper padding-top-l padding-bottom-m">
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto padding-bottom-xl">

      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      	   get_template_part( 'php/includes/content', get_post_format() );
        endwhile; endif; ?>

      <div class="nav-previous"><?php next_posts_link( 'Old Posts' ); ?></div>
      <div class="nav-next"><?php previous_posts_link( 'New Posts' ); ?></div>
    </div>
  </div>
</div>
</div>

<?php get_template_part( 'php/includes/footer' ); ?>
