<?php
/*
Plugin Name: Wino
Plugin URI: 
Description: Wine and dine all of the things!
Version: 1.0
Author: Greg Linch
Author URI: http://www.greglinch.com
License: GPL2
*/

add_action( 'init', 'create_post_type' );

function create_post_type() {
	register_post_type( 'veoni_wine',
		array(
			'labels' => array(
				'name' => __( 'Wines' ),
				'singular_name' => __( 'Wine' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

?>