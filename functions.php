<?php
/*
	* FUNCIONES GENERALES DE LA PLANTILLA
	* Se incluyen cada grupo de funcionalidades en archivos diferentes.
*/
include "includes/options.php";
include "includes/favicon.php";
include "includes/thumbnails.php";
include "includes/remover_paneles.php";
include "includes/remover_innecesarias.php";
include "includes/login_personalizado.php";
include "includes/admin_footer_personalizado.php";
include "includes/sitemap.php";
include "includes/tinymce.php";
include "includes/campos_usuario.php";
include "includes/sidebar.php";
// include "includes/minificacion.php";

/********* FUNCIONES GENERALES DE LA PLANTILLA *******/
// Agregando las fuentes de Google
add_action( 'wp_head', function() {
	echo "<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.7' type='text/css' media='all' />";
	echo "\n";
}, 5 );


// Cargando estilos y scripts de la manera correcta
function losScripts()
{
	wp_register_script( 'script_base', get_template_directory_uri() . '/js/scripts.js', '', '1.0.0', true);
	wp_enqueue_script( 'script_base' );

	wp_register_style( 'estilos_base', get_template_directory_uri() . '/css/style.css', true, '1.0.0', 'all');
	wp_enqueue_style( 'estilos_base' );


}
add_action( 'wp_enqueue_scripts', 'losScripts' );


// Dando soporte a los menúes
// Registrar las menúes de navegación
add_theme_support( 'menus' );
register_nav_menus ( array(
	'header_nav'	=>	__( 'Menú Principal', 'wineconnections' ),
	'sidebar_nav'	=>	__( 'Menú del Sidebar', 'wineconnections' ),
	'footer_nav'	=>	__( 'Menú del pie de página', 'wineconnections' )
	)
);

// Soporte para html5
function soporte_html5()
{
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'soporte_html5' );


// Ready for i18n
load_theme_textdomain( "wineconnections", TEMPLATEPATH . "/languages");

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

// Let WordPress manage the document title
add_theme_support( 'title-tag' );

// Habilitar un logo personalizado y su texto
add_theme_support( 'custom-logo', array(
	'height'				=> 200,
	'width'					=> 400,
	'flex-height'			=> true,
	'flex-width'			=> true,
	'header-text'			=> array( 'site-title', 'site-description' ),
	)
);

// Habilitar un header personlizado
$defaults1 = array(
    'default-image'          => '',
    'random-default'         => false,
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'default-text-color'     => '',
    'header-text'            => true,
    'uploads'                => true,
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
    'video'                  => false,
    'video-active-callback'  => 'is_front_page',
);
add_theme_support( 'custom-header', $defaults1 );


// Habilitar un fondos personalizados
$defaults2 = array(
    'default-image'          => '',
    'default-preset'         => 'fit',			// 'default', 'fill', 'fit', 'repeat', 'custom'
    'default-position-x'     => 'center',		// 'left', 'center', 'right'
    'default-position-y'     => 'center',		// 'top', 'center', 'bottom'
    'default-size'           => 'cover',		// 'auto', 'contain', 'cover'
    'default-repeat'         => 'no-repeat',	// 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
    'default-attachment'     => 'scroll',		// 'scroll', 'fixed'
    'default-color'          => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-background', $defaults2 );

// Habilitar el refresco de los widgets
add_theme_support( 'customize-selective-refresh-widgets' );

?>