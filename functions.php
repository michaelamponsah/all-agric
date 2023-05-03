<?php 

/**
 * Template Name: functions.php
 * Description: Add features to wordpress team
 * 
 */

 function fn_theme_scripts() {
  // Include style files
  wp_enqueue_style('custom-style', get_stylesheet_uri());
  wp_enqueue_style('post-style', get_template_directory_uri().'/css/single-post.css');
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri().'/js/custom.js', array(), '1.0.0', true);
 }

 add_action('wp_enqueue_scripts', 'fn_theme_scripts');

//  Add New Features
function fn_theme_supports() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form'));
  add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'fn_theme_supports');

// Register Navigation Menu
function fn_nav_menu() {
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu', 'text_domain'),
    'secondary-menu' => __('secondary Menu', 'text_domain'),
  ));
}

add_action('init', 'fn_nav_menu');

function fn_custom_excerpt_length($length) {
  return 15;
}
add_filter('excerpt_length', 'fn_custom_excerpt_length');



// Set Post Views
function fn_set_post_views($post_id) {
    $count_key = 'wp_post_views_count';
    $count = get_post_meta($post_id, $count_key, true);
     
    if($count == '') {
        $count = 0;
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
    } else {
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}

function fn_track_post_views ($post_id) {
  if ( !is_single() ) 
  return;
   
  if ( empty ( $post_id) ) {
      global $post;
      $post_id = $post->ID;    
  }
   
  fn_set_post_views($post_id);
}

add_action( 'wp_head', 'fn_track_post_views');
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

?>