<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; 
register_nav_menus( array('primary' => __( 'Primary Menu', 'top_navbar' ))); 

require "remove_actions.php";

add_theme_support( 'post-thumbnails' );

add_action( "wp_enqueue_scripts", "mancho_styles");
add_action( "wp_footer", "mancho_footer_scripts");

function mancho_styles(){
	wp_enqueue_style( 'mancho-style', get_stylesheet_uri() );
	wp_enqueue_style( "bootstrap.css", get_template_directory_uri() . "/assets/scripts/bootstrap/css/bootstrap.min.css");
	wp_enqueue_style( "main.css", get_template_directory_uri() . "/assets/css/main.css");
	wp_enqueue_style( "fontawesome.css", get_template_directory_uri() . "/assets/scripts/fontawesome/css/all.css");
}
function mancho_footer_scripts(){
	wp_enqueue_script("jQuery", get_template_directory_uri() . "/assets/scripts/bootstrap/jquery-3.4.1.slim.min.js");
	wp_enqueue_script("popper", get_template_directory_uri() . "/assets/scripts/bootstrap/popper.min.js");
	wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/scripts/bootstrap/js/bootstrap.min.js");
}

add_action("after_setup_theme", "register_menu");

function register_menu(){
	register_nav_menu( "TopCategory", "TopNavbar");
}


?>