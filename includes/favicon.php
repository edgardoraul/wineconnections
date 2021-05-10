<?php
// Agregando un favicon al área de administración
function admin_favicon()
{
	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_bloginfo('stylesheet_directory') . '/img/favicon.ico" />';
}
add_action('admin_head', 'admin_favicon', 1);


// Favicones en el front-end
add_action( 'wp_head', 'misFavicones', 10 );
function misFavicones()
{ ?>
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('stylesheet_directory');?>img/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-128.png" sizes="128x128" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.ico" type="image/x-icon" />
	<meta name="application-name" content="<?php bloginfo('name');?>" />
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory');?>/img/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?php bloginfo('stylesheet_directory');?>/img/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?php bloginfo('stylesheet_directory');?>/img/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?php bloginfo('stylesheet_directory');?>/img/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?php bloginfo('stylesheet_directory');?>/img/mstile-310x310.png" />
	<meta name="msapplication-notification" content="frequency=30;polling-uri=https://notifications.buildmypinnedsite.com/?feed=<?php bloginfo('url') ;?>/feed&amp;id=1;polling-uri2=https://notifications.buildmypinnedsite.com/?feed=<?php bloginfo('url') ;?>/feed&amp;id=2;polling-uri3=https://notifications.buildmypinnedsite.com/?feed=<?php bloginfo('url') ;?>/feed&amp;id=3;polling-uri4=https://notifications.buildmypinnedsite.com/?feed=<?php bloginfo('url') ;?>/feed&amp;id=4;polling-uri5=https://notifications.buildmypinnedsite.com/?feed=<?php bloginfo('url') ;?>/feed&amp;id=5;cycle=1" />
	<?php	
}


?>