<?php 
function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1,'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts','load_stylesheets');



function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1,true);
    wp_enqueue_script('custom');    

}
add_action('wp_enqueue_scripts','load_javascript');

// function mytheme_add_woocommerce_support() {
//     add_theme_support( 'woocommerce' );
// }

// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

