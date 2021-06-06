<?php
/**
* journeys.php
* @package WordPress
* @subpackage wineconections
* @since wineconections 1.0
* Text Domain: wineconections
*/

// Exit if accessed directly
defined( 'ABSPATH' ) or die( __("Nada de brutos aquí!", "wineconections") );

get_header();
get_sidebar();

/* Clases */
class User
{
	public $type;
}
class Admin
{
	public function greet()
	{
		return "Hola Administrador";
	}
}
$user = new User;
$user->type = new Admin;
echo $user->type->greet();


/* ************** */
get_footer();
?>