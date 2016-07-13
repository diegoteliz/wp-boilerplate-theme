<?php
/**
 * Demo custom post
 *
 * @package Diego Teliz WP Boilerplate
 * @since 1.0
 */

// Create custom post
function demo_register() {

    $args = array(
        'labels' => array(
            'name'                  => __('Demo', 'diegoteliz_wp'),
            'singular_name'         => __('demos', 'diegoteliz_wp'),
            'add_new'               => __('Add new', 'diegoteliz_wp'),
            'add_new_item'          => __('Add new demo', 'diegoteliz_wp'),
            'edit_item'             => __('Edit demo', 'diegoteliz_wp'),
            'new_item'              => __('New demo', 'diegoteliz_wp'),
            'view_item'             => __('View demo', 'diegoteliz_wp'),
            'search_items'          => __('Find demos', 'diegoteliz_wp'),
            'not_found'             => __('No demos found', 'diegoteliz_wp'),
            'not_found_in_trash'    => __('No demos found in Trash', 'diegoteliz_wp'),
            'parent_item_colon'     => ''
        ),
        'public'                    => true,
        'publicly_queryable'        => true,
        'show_ui'                   => true,
        'query_var'                 => true,
        'rewrite'                   => array( 'slug' => '/demos', 'with_front' => true ),
        'capability_type'           => 'post',
        'hierarchical'              => false,
        'menu_position'             => 6,
        'menu_icon'                 => 'dashicons-format-aside',
        'taxonomies'                => array('category', 'post_tag'),
        'supports'                  => array( 'title' , 'excerpt' , 'editor' , 'thumbnail' ),
        'can_export'                => true
    ); 
    register_post_type( 'demo' , $args );
}

add_action( 'init', 'demo_register' );

?>