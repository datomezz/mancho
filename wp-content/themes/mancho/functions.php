<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; 
register_nav_menus( array('primary' => __( 'Primary Menu', 'top_navbar' ))); 

require "remove_actions.php";

add_theme_support( 'post-thumbnails' );

add_action( "wp_head", "mancho_styles");
add_action( "wp_footer", "mancho_footer_scripts");


function mancho_styles(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');

    wp_enqueue_style( 'mancho-style', get_stylesheet_uri() );
	wp_enqueue_style( "bootstrap.css", get_template_directory_uri() . "/assets/scripts/bootstrap/css/bootstrap.min.css");
	wp_enqueue_style( "main.css", get_template_directory_uri() . "/assets/css/main.css");
	wp_enqueue_style( "fontawesome.css", get_template_directory_uri() . "/assets/scripts/fontawesome/css/all.css");
}
function mancho_footer_scripts(){

	wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/scripts/bootstrap/js/bootstrap.min.js");
	wp_enqueue_script('mancho-scripts', get_template_directory_uri() . "/assets/scripts/mancho-scripts.js", array('jquery'), true);
}

//POST VIEWS COUNTER
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count;
}
// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);

function posts_column_views($defaults){
    $defaults['post_views'] = __('Views');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
   if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}

//Title Settings
add_theme_support("title-tag");

add_filter( 'document_title_parts', function( $title ){

	if( isset($title['tagline']) ) unset( $title['tagline'] );
	return $title;
});

add_filter( 'document_title_parts', function( $parts ){

	if( isset($parts['site']) ) unset($parts['site']);
	return $parts;
});
//Image sizes
add_image_size('article', 341, 192, true);

add_image_size('slider', 760, 367, true);

//Menu

add_action("after_setup_theme", "siri");

function siri(){
    register_nav_menu("yle", "pitalo");
}

//Sidebar
add_theme_support('widgets');

add_action("widgets_init", "register_my_widgets");

function register_my_widgets(){
    $sidebarWidgets = array(
        "name" => "Mancho's sidebar",
        "id" => "mancho_widgets",
        "description" => "Mancho's Sidebar"
    );
    register_sidebar($sidebarWidgets);  
}


//AJAX

remove_all_filters( 'wp_mail_from' );
remove_all_filters( 'wp_mail_from_name' );

add_action("wp_ajax_loadmore", "load_more");
add_action("wp_ajax_nopriv_loadmore", "load_more");

add_action("wp_ajax_loadmore_second", "load_more_second");
add_action("wp_ajax_nopriv_loadmore_second", "load_more_second");

add_action("wp_ajax_sendMail", "send_mail");
add_action("wp_ajax_nopriv_sendMail", "send_mail");


function send_mail(){
    $formName = $_POST["name"];
    $formMail = $_POST["mail"];
    $formSubject = $_POST["subject"];
    $formMessage = $_POST["message"];

    $to = "datomezz@gmail.com";

    $headers = array(
        "From: MySelf <admin@dima.ge>",
        "content-type: text/html",
        "Cc: John QCodes <admin@dot.com>",
        "Cc: Alakh Akbar <admin@exe.com"
    );

    wp_mail($to, $formSubject, $formMessage, $headers);

    wp_die();
}


function load_more(){
    $query = new WP_Query( array('orderby'=> 'date',  'posts_per_page' => 12));
    while ($query->have_posts()) {
        $query->the_post();
        
        get_template_part("includes/article", "excerpt");
    }

    wp_die();
}

function load_more_second(){
    $query = new WP_Query( array('orderby'=> 'date',  'posts_per_page' => 24));
    while ($query->have_posts()) {
        $query->the_post();
        
        get_template_part("includes/article", "excerpt");
    }

    wp_die();
}

?>