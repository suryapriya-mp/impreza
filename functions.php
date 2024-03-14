<?php

function add_css()
{
   wp_register_style('font', get_template_directory_uri() . '/assets/fonts/stylesheet.css', false,'1.1','all');
   wp_enqueue_style( 'font');
   wp_register_style('style', get_template_directory_uri() . '/assets/css/styles.css', false,'1.1','all');
   wp_enqueue_style( 'style');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('bundle', get_template_directory_uri() . '/assets/plugins/bundile.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bundle');
   wp_register_script('about', get_template_directory_uri() . '/assets/javascript/about.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'about');
   wp_register_script('script', get_template_directory_uri() . '/assets/javascript/script.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'script');

}
add_action('wp_enqueue_scripts', 'add_script');

?>