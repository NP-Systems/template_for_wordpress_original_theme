<?php

function add_files() {
  // Custom files
  wp_enqueue_style( 'my-script-css', get_template_directory_uri() . '/style.css', NULL,false );
  wp_enqueue_script( 'my-script-js', get_template_directory_uri() . '/main.js', array(), NULL, true);
}

add_action('wp_enqueue_scripts', 'add_files');
