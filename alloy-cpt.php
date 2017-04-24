<?php
/*
Plugin Name: Alloy CPT
Plugin URI: https://studioalloy.nl
Description: a plugin to create custom post types and taxonamies
Version: 0.1
Author: Mitchel van Eijgen
Author URI: https://mvaneijgen.nl
License: GPL2
*/
// /* -------------------------- //
// // Create custom post type
// // -------------------------- */
// function testimonal_init() {
//   // set up testimonal labels
//   $labels = array(
//     'name' => 'testimonals',
//     'singular_name' => 'testimonal',
//     'add_new' => 'Add New testimonal',
//     'add_new_item' => 'Add New testimonal',
//     'edit_item' => 'Edit testimonal',
//     'new_item' => 'New testimonal',
//     'all_items' => 'All testimonals',
//     'view_item' => 'View testimonal',
//     'search_items' => 'Search testimonals',
//     'not_found' =>  'No testimonals Found',
//     'not_found_in_trash' => 'No testimonals found in Trash',
//     'parent_item_colon' => '',
//     'menu_name' => 'testimonals',
//   );
//
//   // register post type
//   $args = array(
//     'labels' => $labels,
//     'public' => true,
//     'has_archive' => true,
//     'show_ui' => true,
//     'capability_type' => 'post',
//     'hierarchical' => false,
//     'rewrite' => array('slug' => 'testimonal'),
//     'query_var' => true,
//     'menu_icon' => 'dashicons-randomize',
//     'supports' => array(
//       'title',
//       'editor',
//       'excerpt',
//       'trackbacks',
//       'custom-fields',
//       'comments',
//       'revisions',
//       'thumbnail',
//       'author',
//       'page-attributes'
//     )
//   );
//   register_post_type( 'testimonal', $args );
//
// }
// add_action( 'init', 'testimonal_init' );
//
// /* -------------------------- //
// // Create custom taxonamy
// // -------------------------- */
// function people_init() {
// 	// create a new taxonomy
// 	register_taxonomy(
// 		'people',
//     array('testimonal'),
// 		array(
// 			'label' => __( 'People' ),
// 			'rewrite' => array( 'slug' => 'person' ),
// 			'capabilities' => array(
// 				'assign_terms' => 'edit_guides',
// 				'edit_terms' => 'publish_guides'
// 			)
// 		)
// 	);
// }
// add_action( 'init', 'people_init' );

/* -------------------------- //
// Remove custom taxonamy
// -------------------------- */
// function ev_unregister_taxonomy(){
//   register_taxonomy('testimonal_category', array());
// }
// add_action('init', 'ev_unregister_taxonomy');

/*
 * Usage for a custom post type named 'movies':
 * unregister_post_type( 'movies' );
 *
 * Usage for the built in 'post' post type:
 * unregister_post_type( 'post', 'edit.php' );
*/
?>
