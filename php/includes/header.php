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
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,800" rel="stylesheet">

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/github.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/css/treeview.css">

  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo( 'template_directory' );?>/style.css">

  <?php wp_head(); ?>
</head>
<body>

<div class="header-wrapper underline-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="header-title"><a href="http://www.stephencz.com">Stephen Czekalski</a></div>
      </div>
      <div class="col-lg-4">
        <script>
          (function() {
            var cx = '005733939158944831360:fxbmxlkexx4';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();
        </script>
        <gcse:search></gcse:search>
      </div>
    </div>
  </div>
</div>
