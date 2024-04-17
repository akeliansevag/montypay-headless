<?php
// function get_social_media_icons(){
// 	return get_field("social_media_icons","options");
// }

// add_action('rest_api_init', function(){
// 	register_rest_route( 'portfolio', '/social-media-icons', array(
// 		'methods' => 'GET',
// 		'callback' => 'get_social_media_icons',
// 	));
// });
function my_theme_setup()
{
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');
