<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; 
register_nav_menus( array('primary' => __( 'Primary Menu', 'top_navbar' ))); 

require "remove_actions.php";

add_theme_support( 'post-thumbnails' );

add_action( "wp_head", "mancho_styles");
add_action( "wp_footer", "mancho_footer_scripts");

function mancho_styles(){
	wp_enqueue_style( 'mancho-style', get_stylesheet_uri() );
	wp_enqueue_style( "bootstrap.css", get_template_directory_uri() . "/assets/scripts/bootstrap/css/bootstrap.min.css");
	wp_enqueue_style( "main.css", get_template_directory_uri() . "/assets/css/main.css");
	wp_enqueue_style( "fontawesome.css", get_template_directory_uri() . "/assets/scripts/fontawesome/css/all.css");
}
function mancho_footer_scripts(){
    wp_enqueue_script("jquery");
    wp_enqueue_script("popper", get_template_directory_uri() . "/assets/scripts/bootstrap/popper.min.js");
	wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/scripts/bootstrap/js/bootstrap.min.js");
    wp_enqueue_script("loadmore", get_template_directory_uri() . "/assets/scripts/loadmore.js");
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
//Dots in article
function wpdocs_custom_excerpt_length() {
    return 18;
}
add_filter('excerpt_more', "correctMore");
function correctMore($more) {
	return '...';
};
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

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
        "name" => "Test sidebar",
        "id" => "test_sidebar",
        "description" => "my test sidebar",
    );
    register_sidebar($sidebarWidgets);  
}

//Portfolio

add_action("init", "register_post_types");

function register_post_types(){
    $portfolioArr =  array(
        "label" => null,
        "labels" => array(
            "name" => "პორტფოლიო",
            "singular_name" => "პორტფოლიო",
            "add_new" => "add new post",
            "add_new_item" => "ახალი პოსტის დამატება", //title
            "edit_item" => "პოსტის რედაქტირება",
            "new_item" => "ახალი პოსტი",
            "view_item" => "სიახლის ნახვა",
            "menu_name" => "Portfolio"
        ),
        "description" => " ",
        "public" => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        "show_in_manu" => true,
        "show_in_rest" => true,
        "rest_base" => null,
        "menu_position" => 4,
        "menu_icon" => "dashicons-format-gallery",
        "hierartical" => false,
        "supports" => array("title", "editor", "author", "excerpt", "thumbnail"),
        "taxonomies" => array()    
    );

    register_post_type("portfolio", $portfolioArr);
}

//AJAX

add_action("wp_ajax_loadmore", "load_More");
add_action("wp_ajax_nopriv_loadmore", "load_More");


function load_More(){
    echo "yleo shen";
}

?>