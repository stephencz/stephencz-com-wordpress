<?php
/*
Template Name: No Title
*/
?>

<?php get_template_part( 'php/includes/header' ); ?>
<?php get_template_part( 'php/includes/nav' ); ?>

<div class="container padding-top-l">
  <div class="row">
    <div class="col-md-8 mx-auto padding-bottom-xl">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
      endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_template_part( 'php/includes/footer' ); ?>
