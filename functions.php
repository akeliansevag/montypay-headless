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
	add_image_size('large', 700); // Large Thumbnail
	add_image_size('medium', 250, '', true); // Medium Thumbnail
	add_image_size('medium-square', 250, 250, true); // Medium Square
	add_image_size('small-square', 120, 120, true); // Small Square
	add_image_size('avatar', 50, 50, true); // Small Square
	add_image_size('post-thumbnail', 500, 420, true); // Post Thumbnail
	add_image_size('small', 120, '', true); // Small Thumbnail
	add_image_size('banner-image', 1920);
	add_image_size('portfolio-thumbnail', 300, 200, true); // Custom Thumbnail Size call using
}

add_action('after_setup_theme', 'my_theme_setup');
