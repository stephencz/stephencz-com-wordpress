<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Boostrap Required Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Additional Meta Tags -->
  <title>The Personal Website of Stephen Czekalski</title>

  <!-- CSS, Fonts, and Other Links-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/style.css">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,800" rel="stylesheet">

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/tomorrow.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/css/treeview.css">

  <?php wp_head(); ?>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto underline-light">
        <div class="header-title">
          <a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('title'); ?></a>
        </div>
      </div>
    </div>
  </div>
