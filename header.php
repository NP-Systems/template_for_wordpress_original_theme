<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Your site title</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="A description for your site">

  <?php if ( is_home() || is_front_page() ) : ?>
    <meta name="title" content="title for your site">
    <meta name="description" content="A description for your site">
  <?php endif; ?>
  <?php wp_head(); ?>
 </head>
 <body>
<header>
  this is header
</header>
