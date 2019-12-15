<?php

// STYLES & SCRIPTS
function global_theme_assets() {
   // loading styles
   wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Cairo:300,400,600,700&display=swap');
   wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.4.1/css/all.css');

   wp_enqueue_style('global_theme_main_styles', get_stylesheet_uri(), microtime());
   
   // loading scripts
   wp_enqueue_script('global_theme_main_jquery', get_theme_file_uri('/assets/js/jquery3.3.1.js'), NULL, true);
   wp_enqueue_script('global_theme_main_popper', get_theme_file_uri('/assets/js/popper.min.js'), NULL, true);
   wp_enqueue_script('global_theme_main_bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), NULL, true);
   wp_enqueue_script('global_theme_main_owl_carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js'), NULL, true);
   wp_enqueue_script('global_theme_main_scripts', get_theme_file_uri('/assets/js/main.js'), NULL, true);
}
add_action('wp_enqueue_scripts', 'global_theme_assets');

// Theme Features
function global_theme_features() {
   add_theme_support('title-tag');
   add_theme_support('post_thumbnails');
   add_theme_support('html5', array(
      'comment-list', 'comment-form', 'search-form'
   ));
}

add_action('after_setup_theme', 'global_theme_features');

// Pictures post types
function global_theme_custom_post_types() {
   // Project Post Type
   register_post_type('courses-pictures', array(
       'rewrite' => array('slug' => 'courses-pictures'),
       'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comment'),
       'public' => true,
       'has_archive' => true,
       'labels' => array(
           'name' => 'Courses Pictures',
           'singular_name' => 'Course Picture',
           'add_new_item' => 'Add New Course Picture',
           'edit_item' => 'Edit Course Picture',
           'all_items' => 'All Course Pictures'
       ),
       'menu_icon' => 'dashicons-format-gallery'
   ));
}
add_action('init', 'global_theme_custom_post_types');