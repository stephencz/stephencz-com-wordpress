<?php
/*
Template Name: Archives
*/
?>

<?php get_template_part( 'php/includes/header' ); ?>
<?php get_template_part( 'php/includes/nav' ); ?>

<div class="container padding-top-l">
  <div class="row">
    <div class="col-md-8 mx-auto padding-bottom-xl">
      <h3>Posts by Relevance</h3>
      <div class="row padding-top-s">
        <div class="col-md-6">
          <h4>Cryptography</h4>
          <ul class="relevance-list">
            <li><a href="https://stephencz.com/the-terminology-of-cryptology/">The Terminology of Cryptology</a></li>
          </ul>
        </div>

        <div class="col-md-6">

        </div>
      </div>

      <div class="row padding-top-xl">
        <div class="col-md-6">
          <h4>Posts by Month</h4>
          <ul class="month-list">
          <?php wp_get_archives('type=monthly'); ?>
          </ul>
        </div>

        <div class="col-md-6">
          <h4>Posts by Category</h4>
          <ul class="category-list">
          <?php wp_list_categories(); ?>
          </ul>
        </div>
      </div>

      <div class="row padding-top-xl">
        <div class="col-md-12 mx-auto">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'php/includes/footer' ); ?>
