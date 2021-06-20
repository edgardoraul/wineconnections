<?php
/**
* header.php
* @package WordPress
* @subpackage wineconections
* @since wineconections 1.0
* Text Domain: wineconections
*/

// Exit if accessed directly
defined( 'ABSPATH' ) or die( __("Nada de brutos aquí!", "wineconections") );


get_header();


/* Las secciones principales y con llamada a la acción */
include "includes/seccion_1.php";

/* Los números de paso con imágenes y texto - Sección 2 */
include "includes/seccion_2.php";

/* Los paneles con imágenes y texto - Sección 3: Imágenes con texto intercambiadas */
include "includes/seccion_3.php";

/* Los sliders de las marcas de los auspiciantes */
include "includes/seccion_4.php";

get_footer();

?>