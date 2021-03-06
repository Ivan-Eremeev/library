<?php
// This file shows a demo for register meta boxes for ALL custom post types
add_action( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
	$prefix = 'your_prefix_';

	$post_types = get_post_types();

	// 1st meta box
	$meta_boxes[] = array(
		'id'     => 'personal',
		'title'  => __( 'Personal Information', 'textdomain' ),
		'post_types' => $post_types,

		'fields' => array(
			array(
				'name' => __( 'Full name', 'textdomain' ),
				'id'   => $prefix . 'fname',
				'type' => 'text',
			),
		),
	);

	// Other meta boxes go here
	return $meta_boxes;
}
