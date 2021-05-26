<?php
/**
* page.php
* @package WordPress
* @subpackage wineconections
* @since wineconections 1.0
* Text Domain: wineconections
*/
// Exit if accessed directly
defined( 'ABSPATH' ) or die( __("Nada de brutos aquí!", "wineconections") );

get_header();
get_sidebar();

if ( have_posts() ) : while ( have_posts() ) : the_post();
endwhile;
else: _e("No hay nada", 'wineconections');
endif;

get_footer();
?>