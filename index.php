<?php get_template_part( 'php/includes/header' ); ?>
<?php get_template_part( 'php/includes/about' ); ?>

<div class="content-wrapper padding-top-m padding-bottom-xl">
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">

      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      	   get_template_part( 'php/includes/content', get_post_format() );
        endwhile; endif; ?>

    </div>
  </div>
</div>
</div>

<?php get_template_part( 'php/includes/projects' ); ?>
<?php get_template_part( 'php/includes/footer' ); ?>
