<?php

// Theme Assets
function global_theme_assets() {
   // Custom fonts
   wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Cairo:300,400,600,700&display=swap');
   wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.4.1/css/all.css');

   // Styles
   wp_enqueue_style('global_theme_main_styles', get_stylesheet_uri(), microtime());
   
   // Scripts
   wp_deregister_script('jquery');

   wp_enqueue_script('_jquery', get_template_directory_uri() . '/assets/js/jquery3.3.1.js', array(), '1.0', true);
   wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true);
   wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true);
   wp_enqueue_script('owl-carousle-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true);
   wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'global_theme_assets');

// Theme Features
function global_theme_features() {
   add_theme_support('title-tag');
   add_theme_support('post_thumbnails');
   /* add_theme_support('html5', array(
      'comment-list', 'comment-form', 'search-form'
   )); */
}

add_action('after_setup_theme', 'global_theme_features');

// Pictures post types
function global_theme_custom_post_types() {
   // Slider Post Type
   register_post_type('slider', array(
       'rewrite' => array('slug' => 'slider'),
       'supports' => array('title'),
       'public' => true,
       'has_archive' => true,
       'labels' => array(
           'name' => 'Slider',
           'singular_name' => 'Slider',
           'add_new_item' => 'Add New Slider Image',
           'edit_item' => 'Edit Slider Image',
           'all_items' => 'All Slider Images'
       ),
       'menu_icon' => 'dashicons-layout'
   ));

   // Services
   register_post_type('services', array(
      'rewrite' => array('slug' => 'services'),
      'supports' => array('title'),
      'public' => true,
      'has_archive' => true,
      'labels' => array(
          'name' => 'Services',
          'singular_name' => 'Service',
          'add_new_item' => 'Add New Service',
          'edit_item' => 'Edit Service',
          'all_items' => 'All Services'
      ),
      'menu_icon' => 'dashicons-carrot'
  ));

  // Achievments
  register_post_type('video', array(
   'rewrite' => array('slug' => 'videos'),
   'supports' => array('title'),
   'public' => true,
   'has_archive' => true,
   'labels' => array(
       'name' => 'Videos',
       'singular_name' => 'Video',
       'add_new_item' => 'Add New Video',
       'edit_item' => 'Edit Video',
       'all_items' => 'All Videos'
      ),
      'menu_icon' => 'dashicons-format-video'
   ));

  // Achievments
  register_post_type('course-picture', array(
   'rewrite' => array('slug' => 'courses-pictures'),
   'supports' => array('title'),
   'public' => true,
   'has_archive' => true,
   'labels' => array(
       'name' => 'Courses Pictures',
       'singular_name' => 'Course Picture',
       'add_new_item' => 'Add New Course Picture',
       'edit_item' => 'Edit Course Picture',
       'all_items' => 'All Courses Pictures'
      ),
      'menu_icon' => 'dashicons-format-gallery'
   ));

   // Partners
  register_post_type('partner', array(
   'rewrite' => array('slug' => 'partners'),
   'supports' => array('title'),
   'public' => true,
   'has_archive' => true,
   'labels' => array(
       'name' => 'Partners',
       'singular_name' => 'Partner',
       'add_new_item' => 'Add New Partner',
       'edit_item' => 'Edit Partner',
       'all_items' => 'All Partners'
      ),
      'menu_icon' => 'dashicons-image-filter'
   ));

   // Team
  register_post_type('team', array(
   'rewrite' => array('slug' => 'team'),
   'supports' => array('title'),
   'public' => true,
   'has_archive' => true,
   'labels' => array(
       'name' => 'Team',
       'singular_name' => 'Team',
       'add_new_item' => 'Add New Member',
       'edit_item' => 'Edit Member',
       'all_items' => 'All Team Members'
      ),
      'menu_icon' => 'dashicons-buddicons-buddypress-logo'
   ));
}
add_action('init', 'global_theme_custom_post_types');