<?php
/*
Template Name: Archives
*/
?>

<?php get_template_part( 'php/includes/header' ); ?>
<?php get_template_part( 'php/includes/nav' ); ?>

<div class="container padding-top-l">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <form role="search" method="get" id="searchform" class="searchform" action="https://stephencz.com/">
      <div class="archive-search-wrapper">
      <input class="archive-search-input" type="text" value="" name="s" id="s">
      <input class="archive-search-button" type="submit" id="searchsubmit" value="Search">
      </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-md-7 mx-auto padding-bottom-xl">
      <ul class="category-list">
      <?php wp_get_archives('daily'); ?>
      <p>TEST</p>
      </ul>
    </div>
  </div>

</div>
<?php get_template_part( 'php/includes/footer' ); ?>
