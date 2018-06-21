<?php get_template_part( 'php/includes/header' ); ?>

<div class="container padding-top-xl">
  <div class="row">
    <div class="col-md-10 mx-auto">

      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      	   get_template_part( 'php/includes/content', get_post_format() );
        endwhile; endif; ?>

    </div>
  </div>
</div>

<?php get_template_part( 'php/includes/footer' ); ?>
