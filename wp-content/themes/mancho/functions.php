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
	wp_enqueue_scripts("mancho-scripts", get_template_directory_uri() . "/assets/scripts/mancho-scripts.js" );
}

//POST VIEWS COUNTER
// function to display number of posts.
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
//
function wpdocs_custom_excerpt_length() {
    return 18;
}
add_filter('excerpt_more', function($more) {
	return '...';
});
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>