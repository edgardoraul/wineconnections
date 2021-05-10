<?php
// Cambiar el logo del login y la url del mismo y el título
function custom_login_logo()
{
	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/img/favicon.ico" />';
	echo '<style type="text/css">
		body.login
		{
			background: #111111 !important;
			height: 100% !important;
		}
		h1
		{
			padding-top: 20px !important;
		}
		h1 a
		{
			background: #ffffff url(' . get_bloginfo('stylesheet_directory') . '/img/logo.png) center center no-repeat !important;
			background-size: 90% !important;
			border: 1px solid #c3c4c7;
			height: 100px !important;
			overflow: hidden !important;
			width: 320px !important;
		}
		div#login
		{
			padding: 0 !important;
		}
		.message, #loginform, h1 a
		{
			border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
		}
		</style>';
};
add_action( 'login_head', 'custom_login_logo', 1 );
function the_url( $url )
{
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );
function change_wp_login_title()
{
	return get_option('blogname');
}
add_filter( 'login_headertext', 'change_wp_login_title' );
?>