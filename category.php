<?php get_template_part( 'php/includes/header' ); ?>

<div class="container padding-top-xl">
  <div class="row">
    <div class="col-md-3 order-last order-md-2">
      <?php get_template_part( 'php/includes/featured' ); ?>
      <?php get_template_part( 'php/includes/resources' ); ?>
    </div>
    <div class="col-md-8 order-md-2 order-md-1 padding-bottom-xl">

      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      	   get_template_part( 'php/includes/category-content', get_post_format() );
        endwhile; endif; ?>


      <div class="nav-previous"><?php next_posts_link( 'Old Posts' ); ?></div>
      <div class="nav-next"><?php previous_posts_link( 'New Posts' ); ?></div>
    </div>
  </div>
</div>

<?php get_template_part( 'php/includes/footer' ); ?>
