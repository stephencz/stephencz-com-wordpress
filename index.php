<?php get_template_part( 'php/includes/header' ); ?>

<div class="content-wrapper padding-top-m padding-bottom-xl">
<div class="container">
  <div class="row">
    <div class="col-md-3 order-last order-md-2">
      <?php get_template_part( 'php/includes/resources' ); ?>
    </div>
    <div class="col-md-9 order-md-2 order-md-1 padding-bottom-xl">

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
