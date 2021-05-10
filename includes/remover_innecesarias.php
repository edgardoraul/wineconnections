<?php
// Los odiosos emojies
function disable_emojis()
{
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
   }
add_action( 'init', 'disable_emojis' );


// Los embebidos
function disable_embeds_code_init()
{
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	add_filter( 'embed_oembed_discover', '__return_false' );
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );
	add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
	remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}
add_action( 'init', 'disable_embeds_code_init', 9999 );

function disable_embeds_tiny_mce_plugin($plugins)
{
	return array_diff($plugins, array('wpembed'));
}

function disable_embeds_rewrites($rules)
{
	foreach($rules as $rule => $rewrite)
	{
		if(false !== strpos($rewrite, 'embed=true'))
		{
			unset($rules[$rule]);
		}
	}
	return $rules;
}

// Desactivando la api rest, exepto usuarios administradores
add_filter( 'rest_authentication_errors', function( $result )
{
	if ( ! empty( $result ) )
	{
	  return $result;
	}
	if ( ! is_user_logged_in() )
	{
	  return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
	}
	if ( ! current_user_can( 'administrator' ) )
	{
	  return new WP_Error( 'rest_not_admin', 'You are not an administrator.', array( 'status' => 401 ) );
	}
	return $result;
});


?>