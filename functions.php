<?php
function portfolio_enqueue_scripts() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
  wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts');
?>
