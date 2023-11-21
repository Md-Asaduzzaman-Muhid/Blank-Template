<?php

/**
 * Registers a custom post type.
 */
function prefix_register_post_type()
{
	
}

add_action('init', 'prefix_register_post_type');



/**
 * Registers a custom taxonomy.
 */
function prefix_register_taxonomy()
{

}

add_action('init', 'prefix_register_taxonomy', 0);


add_action( 'init', 'create_posttype' );
function create_posttype() {

}
