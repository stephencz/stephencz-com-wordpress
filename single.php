<?php get_template_part( 'php/includes/header' ); ?>
<?php get_template_part( 'php/includes/nav' ); ?>

<div class="content-wrapper">
<div class="container padding-top-l">
  <div class="row">
    <div class="col-md-10 mx-auto padding-bottom-xl">

      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
      	   get_template_part( 'php/includes/content-single', get_post_format() );
        endwhile; endif; ?>

    </div>
  </div>
</div>
</div>

<?php get_template_part( 'php/includes/footer' ); ?>
