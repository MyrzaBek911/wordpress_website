<?php 
 
  add_action( 'wp_enqueue_scripts','theme_styles' );
  add_action( 'wp_enqueue_scripts', 'theme_scripts');
  add_action( 'after_setup_theme','theme_register_nav_menu');



  function theme_register_nav_menu() {
  register_nav_menu( 'top', 'Меню в шапке' );
}
  function theme_styles(){
  	wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css'  );
  	wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css'  );
  }

  function theme_scripts(){
  	wp_deregister_script( 'jquery' );
  	wp_register_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
  	wp_enqueue_script('flexslider', get_template_directory_uri(). '/assets/js/jquery.flexslider.js',['jquery'],null, true);
  	wp_enqueue_script('doubletaptogo', get_template_directory_uri(). '/assets/js/doubletaptogo.js',['jquery'],null, true);
  	wp_enqueue_script('init', get_template_directory_uri(). '/assets/js/init.js',['jquery'],null, true);
  	wp_enqueue_script('modernizr', get_template_directory_uri(). '/assets/js/modernizr.js',null,null, false);
  }


