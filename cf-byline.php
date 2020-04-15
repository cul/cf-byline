<?php
/*
Plugin Name: Custom Field Byline
Plugin URI: https://github.com/er-k/cf-byline
Description: Display author bylines from a post's custom field called: custom-byline
Version: 1.0.0
Author: er2576
Author URI: https://github.com/er-k/
License:     MIT
License URI: https://opensource.org/licenses/MIT
*/

// custom-byline display
add_filter( 'the_author', 'custom_byline' );
add_filter( 'get_the_author_display_name', 'custom_byline' );

function custom_byline( $name ) {
	global $post;

	$author = get_post_meta( $post->ID, 'custom-byline', true );

	if ( $author )
		$name = esc_html($author);

	return $name;
}
// end custom-byline display
