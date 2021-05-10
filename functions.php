<?php
/*
	* FUNCIONES GENERALES DE LA PLANTILLA
	* Se incluyen cada grupo de funcionalidades en archivos diferentes.
*/
require_once "includes/favicon.php";
require_once "includes/thumbnails.php";
require_once "includes/remover_paneles.php";
require_once "includes/remover_innecesarias.php";
require_once "includes/login_personalizado.php";
require_once "includes/admin_footer_personalizado.php";
require_once "includes/sitemap.php";
// require_once "includes/minificacion.php";

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


?>