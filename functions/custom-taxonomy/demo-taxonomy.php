<?php 
/**
 * Demo custom taxonomy
 *
 * @package Diego Teliz WP Boilerplate
 * @since 1.0
 */

// Create taxonomy
function demo_taxonomy_register() {

    $labels = array(
        'name'                       => __( 'Demos' , 'diegoteliz_wp' ),
        'singular_name'              => __( 'Demo' , 'diegoteliz_wp' ),
        'search_items'               => __( 'Seach Demos' , 'diegoteliz_wp' ),
        'popular_items'              => __( 'Popular Demos' , 'diegoteliz_wp' ),
        'all_items'                  => __( 'All Demos' , 'diegoteliz_wp' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Demo' , 'diegoteliz_wp' ),
        'update_item'                => __( 'Update Demo' , 'diegoteliz_wp' ),
        'add_new_item'               => __( 'Add New Demo' , 'diegoteliz_wp' ),
        'new_item_name'              => __( 'New Demos Name' , 'diegoteliz_wp' ),
        'separate_items_with_commas' => __( 'Separate demos with commas' , 'diegoteliz_wp' ),
        'add_or_remove_items'        => __( 'Add or remove demos' , 'diegoteliz_wp' ),
        'choose_from_most_used'      => __( 'Choose from the most used demos' , 'diegoteliz_wp' ),
        'not_found'                  => __( 'No demos found' , 'diegoteliz_wp' ),
        'menu_name'                  => __( 'Demos' , 'diegoteliz_wp' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'demo' ),
    );

    register_taxonomy( 'demo', array( 'demo' ), $args );

}

add_action( 'init', 'demo_taxonomy_register', 0 );

?>