<?php 
/** 
*@package labb1-namn
*/


add_theme_support('post-thumnails');
add_theme_support('menus');
add_theme_support('widgets');



// add widget and sidebar 
add_action( 'widgets_init', 'my_awesome_sidebar' );
function my_awesome_sidebar() {
  $args = array(
    'name'          => 'widget1',
    'id'            => 'widget1',
    'description'   => 'This is my first widget',
  );

  register_sidebar( $args );
}

// add widget for footer
add_action( 'widgets_init', 'my_footer_widget' );
function my_footer_widget() {
  $args = array(
    'name'          => 'widget2',
    'id'            => 'widget2',
    'description'   => 'footer widget',
  );

  register_sidebar( $args );
}


/**
 * Set up content width
 */

if ( ! isset( $content_width ) )
 $content_width = 800; /* pixels */

add_theme_support('post-thumnails');
add_theme_support('menus');





/**
 * check if theme is existing, the function will hook the themes
 */

 function TingsThemes_enqueue_scripts(){

    //register styles with update time 
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory().'/css/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', [], false, 'all');


    //register scripts with update time
    wp_register_script('bootstrap-js', get_template_directory_uri().'/js/jquery.js', [],null, true);
    wp_register_style('script-js', get_template_directory_uri().'/js/script.js', [], filemtime(get_template_directory().'/js/script.js'), true);
   

    //enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    
    //enqueue scripts
    wp_enqueue_script('script-js');
    wp_enqueue_script('bootstrap-js');
 }

 add_action( 'wp_enqueue_scripts', 'TingsThemes_enqueue_scripts');

 // Enqueuing Font Awesome icon in WordPress
 
function fontswesomestyles(){
 
    wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/css/font-awesome.css', );    
 
}
 
add_action( 'wp_enqueue_scripts', 'fontswesomestyles');
 
// Ends Here

?>