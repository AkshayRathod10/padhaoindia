<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/lib/animate/animate.min.css', false,'1.1','all');
   wp_register_style('second', get_template_directory_uri() . '/lib/animate/animate.min.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');