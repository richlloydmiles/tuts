<?php 
/*
Plugin Name: nmp example
Plugin URI: http://nmp.co.za
Description: This is a description
Author: Richard Miles
Version: over 9000
Author URI: http://nmp.co.za
*/

// 1.
// add_shortcode('shorty' , 'its_your_birthday');

// function its_your_birthday($atts) {
// 	echo 'clash';
// }

// 2  - getting attributes of shortcode
// function its_your_birthday($atts) {
// 	echo '<pre>';
//  print_r($atts);
// 	echo '</pre>';
// 	// echo $atts['test'];
// }


// 3 - access to framework
// function its_your_birthday($atts) {
//  var_dump(get_post($atts['id']));
// 	// echo get_post($atts['id'])->post_content;
// }


// 4 - shortcode in a text widget


// 5 Custom post types
// 
// 
// add_action( 'init', 'init_gallery_post_type' );

// function init_gallery_post_type() {
// 	$labels = array(
// 		'name'               => _x( 'Gallery', 'post type general name', 'wobble' ),
// 		'singular_name'      => _x( 'Gallery', 'post type singular name', 'wobble' ),
// 		'menu_name'          => _x( 'Galleries', 'admin menu', 'wobble' ),
// 		'name_admin_bar'     => _x( 'Gallery', 'add new on admin bar', 'wobble' ),
// 		'add_new'            => _x( 'Add New', 'Gallery', 'wobble' ),
// 		'add_new_item'       => __( 'Add New Gallery', 'wobble' ),
// 		'new_item'           => __( 'New Gallery', 'wobble' ),
// 		'edit_item'          => __( 'Edit Gallery', 'wobble' ),
// 		'view_item'          => __( 'View Gallery', 'wobble' ),
// 		'all_items'          => __( 'All Galleries', 'wobble' ),
// 		'search_items'       => __( 'Search Galleries', 'wobble' ),
// 		'parent_item_colon'  => __( 'Parent Galleries:', 'wobble' ),
// 		'not_found'          => __( 'No Galleries found.', 'wobble' ),
// 		'not_found_in_trash' => __( 'No Galleries found in Trash.', 'wobble' )
// 		);

// 	$args = array(
// 		'labels'             => $labels,
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => array( 'slug' => 'gallery' ),
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => true,
// 		'menu_position'      => null,
// 		'supports'           => array( 'title' , 'editor' ),
// 		'menu_icon'			 => 'dashicons-welcome-widgets-menus'
// 		);

// 	// https://developer.wordpress.org/resource/dashicons/
// 	register_post_type( 'gallery', $args );
// }

//6 - custom meta boxes (make sure plugin is installed)
//
//custom meta boxes
//https://github.com/humanmade/Custom-Meta-Boxes
// add_filter( 'cmb_meta_boxes', 'custom_meta_gallery' );

// function custom_meta_gallery( array $meta_boxes ) {
// 	// $fields = array(
// 	// 	array( 'id' => 'field-1',  'name' => 'Text input field', 'type' => 'text' ),
// 	// 	array( 'id' => 'field-2', 'name' => 'Read-only text input field', 'type' => 'text', 'readonly' => true, 'default' => 'READ ONLY' ),
//  	// 	array( 'id' => 'field-3', 'name' => 'Repeatable text input field', 'type' => 'text', 'desc' => 'Add up to 5 fields.', 'repeatable' => true, 'repeatable_max' => 5, 'sortable' => true ),
// 	// 	array( 'id' => 'field-4',  'name' => 'Small text input field', 'type' => 'text_small' ),
// 	// 	array( 'id' => 'field-5',  'name' => 'URL field', 'type' => 'url' ),
// 	// 	array( 'id' => 'field-6',  'name' => 'Radio input field', 'type' => 'radio', 'options' => array( 'Option 1', 'Option 2' ) ),
// 	// 	array( 'id' => 'field-7',  'name' => 'Checkbox field', 'type' => 'checkbox' ),
// 	// 	array( 'id' => 'field-8',  'name' => 'WYSIWYG field', 'type' => 'wysiwyg', 'options' => array( 'editor_height' => '100' ), 'repeatable' => true, 'sortable' => true ),
// 	// 	array( 'id' => 'field-9',  'name' => 'Textarea field', 'type' => 'textarea' ),
// 	// 	array( 'id' => 'field-10',  'name' => 'Code textarea field', 'type' => 'textarea_code' ),
// 	// 	array( 'id' => 'field-11', 'name' => 'File field', 'type' => 'file', 'file_type' => 'image', 'repeatable' => 1, 'sortable' => 1 ),
// 	// 	array( 'id' => 'field-12', 'name' => 'Image upload field', 'type' => 'image', 'repeatable' => true, 'show_size' => true ),
// 	// 	array( 'id' => 'field-13', 'name' => 'Select field', 'type' => 'select', 'options' => array( 'option-1' => 'Option 1', 'option-2' => 'Option 2', 'option-3' => 'Option 3' ), 'allow_none' => true, 'sortable' => true, 'repeatable' => true ),
// 	// 	array( 'id' => 'field-14', 'name' => 'Select field', 'type' => 'select', 'options' => array( 'option-1' => 'Option 1', 'option-2' => 'Option 2', 'option-3' => 'Option 3' ), 'multiple' => true ),
// 	// 	array( 'id' => 'field-15', 'name' => 'Select taxonomy field', 'type' => 'taxonomy_select',  'taxonomy' => 'category' ),
// 	// 	array( 'id' => 'field-15b', 'name' => 'Select taxonomy field', 'type' => 'taxonomy_select',  'taxonomy' => 'category',  'multiple' => true ),
// 	// 	array( 'id' => 'field-16', 'name' => 'Post select field', 'type' => 'post_select', 'use_ajax' => false, 'query' => array( 'cat' => 1 ) ),
// 	// 	array( 'id' => 'field-17', 'name' => 'Post select field (AJAX)', 'type' => 'post_select', 'use_ajax' => true ),
// 	// 	array( 'id' => 'field-17b', 'name' => 'Post select field (AJAX)', 'type' => 'post_select', 'use_ajax' => true, 'query' => array( 'posts_per_page' => 8 ), 'multiple' => true  ),
// 	// 	array( 'id' => 'field-18', 'name' => 'Date input field', 'type' => 'date' ),
// 	// 	array( 'id' => 'field-19', 'name' => 'Time input field', 'type' => 'time' ),
// 	// 	array( 'id' => 'field-20', 'name' => 'Date (unix) input field', 'type' => 'date_unix' ),
// 	// 	array( 'id' => 'field-21', 'name' => 'Date & Time (unix) input field', 'type' => 'datetime_unix' ),
// 	// 	array( 'id' => 'field-22', 'name' => 'Color', 'type' => 'colorpicker' ),
// 	// 	array( 'id' => 'field-23', 'name' => 'Location', 'type' => 'gmap' ),
// 	// 	array( 'id' => 'field-24', 'name' => 'Title Field', 'type' => 'title' ),
// 	// );
// 	$fields = array(
// 		array( 'id' => 'gallery_image', 'name' => 'Image upload field', 'type' => 'image', 'repeatable' => true, 'show_size' => true ),
// 		);

// 	$meta_boxes[] = array(
// 		'title' => 'Image Options',
// 		'pages' => 'gallery',
//         // 'show_on' => array( 'id' => array( 1 ) ),
//         // 'hide_on' => array( 'page-template' => array( 'test-page-template.php' ) ),
// 		'context'    => 'normal',
// 		'priority'   => 'high',
//         'fields' => $fields // an array of fields - see individual field documentation.
//         );
// 	return $meta_boxes; 
// }

// add_shortcode('gallery' , 'its_a_gallery');

// function its_a_gallery($atts) {
// 	query_posts( array( 
// 		'post_type'		=> 'gallery' , 
// 		'post_status' 	=> 'publish',
// 		) ) ;

// 	if ( have_posts() ) {
// 		while ( have_posts() ) {	the_post();
// 			// var_dump(get_post_meta( get_the_ID(), 'gallery_image', false ));
// 			// echo wp_get_attachment_image(get_post_meta( get_the_ID(), 'gallery_image', false )[0]);
// 		}
// 	}
// 	wp_reset_postdata();
// }
