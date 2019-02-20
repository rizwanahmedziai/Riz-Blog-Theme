<?php
  function rizblog_theme_setup() {
      // Featured image support
      add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'rizblog_theme_setup');

  //Set Excerpt Length
  //Make sure to set the priority correctly, such as 999, else the default WordPress filter on this function will run last and override what you set here.

  function set_excerpt_length($length) {
      return 60;
  }
  add_filter('excerpt_length', 'set_excerpt_length', 999);

?>