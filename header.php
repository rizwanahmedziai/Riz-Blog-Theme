<!DOCTYPE html>
<html lang="en">

<head php>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php bloginfo('name') ?>
  </title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <h1 class="logo-heading">
      <a href="<?php echo get_home_url(); ?>"><?php bloginfo('name') ?></a>
    </h1>
    <span>
      <?php bloginfo('description') ?></span>
  </header>