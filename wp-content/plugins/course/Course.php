<?php
/*
Plugin Name: course
Plugin URI: https://www.genetechsolutions.com/
Description: You Can Add Team Members Here
Version: 1.0
Author: sidra zehra
*/

// To Prevent Direct Access To PHP Files
if (!defined('ABSPATH')) {
    exit();
}

// Adding action of fields
function create_Course_cpt(){
    $labels = array(
        'name' => __('Course', 'Course'),
        'singular_name' => __('Course', 'Course'),
        'menu_name' => __('Course', 'Course'),
        'name_admin_bar' => __('Course', 'Course'),
        'attributes' => __('Course Attributes', 'Course'),
        'parent_item_colon' => __('Parent Course', 'Course'),
        'all_items' => __('All Course', 'Course'),
        'add_new_item' => __('Add New Course', 'Course'),
        'add_new' => __('Add New', 'Course'),
        'new_item' => __('New Course', 'Course'),
        'edit_item' => __('Edit Course', 'Course'),
        'update_item' => __('Update Course', 'Course'),
        'view_item' => __('View Course', 'Course'),
        'view_items' => __('View Course', 'Course'),
        'search_items' => __('Search Course', 'Course'),
        'not_found' => __('Not Found', 'Course'),
        'not_found_in_trash' => __('Not Found In Trash', 'Course'),
        'insert_into_item' => __('Insert Into Course', 'Course'),
        'uploaded_to_this_item' => __('Uploaded Into This Course', 'Course'),
        'items_list' => __('Course List', 'Course'),
        'items_list_navigation' => __('Course List Navigation', 'Course'),
        'filter_items_list' => __('Filter Course List', 'Course'),
    );

    $args = array(
        'label' => __('Course', 'Course'),
        'description' => __('List Of All Course', 'Course'),
        'labels' => $labels,
        'supports' => array('title', 'excerpt', 'revisions', 'category', 'editor', 'thumbnail'),
        'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'course'),
    );

    register_post_type('course', $args);
}

add_action('init', 'create_course_cpt');

// taxonomies
function create_course_hierarchical_taxonomy(){
    $labels = array(
        'name' => _x('Course Category', 'taxonomy general name'),
        'singular_name' => _x('Topic', 'taxonomy singular name'),
        'search_items' => __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Categories'),
        'parent_item_colon' => __('Parent Categories:'),
        'edit_item' => __('Edit Categories'),
        'update_item' => __('Update Categories'),
        'add_new_item' => __('Add New Categories'),
        'new_item_name' => __('New Categories Name'),
        'menu_name' => __('Course Categories'),
    );



    register_taxonomy('course_category', array('course'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'course-category'),
    ));
}

add_action('init', 'create_course_hierarchical_taxonomy');

// Creating Structural Short Code
function show_course($atts){
    $args = array(
        'post_type' => 'course',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'ID',
        'order' => 'asc',
        'tax_query' => array(
            // code for slug
            array(
                'taxonomy' => 'course_category',
                'field' => 'slug',
                'terms' => $atts['slug'],
            ),
        ),
    );

    $featured = new WP_Query($args);
    $html = '';

    $html .= '<div class="our_courses-section">';

    if ($featured->have_posts()):
        while ($featured->have_posts()): $featured->the_post();

            $html .= '<div class="our_courses_row">
                        <div class="our_courses_col">
                            <div class="feature-img">
                                <img src="'.get_the_post_thumbnail_url(get_the_ID()).'">
                            </div>
                            <div class="our_courses_content">
                                <h2>'.get_the_title().'</h2>
                                <p class="bio">'.get_the_content().'</p>
                            </div>
                        </div>
                    </div>';

        endwhile;
    endif;

    $html .= '</div>';

    wp_reset_query();
    return $html;
}

add_shortcode('show_course_shortcode', 'show_course');
