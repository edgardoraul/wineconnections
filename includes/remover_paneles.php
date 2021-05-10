<?php
// Eliminar el panel de bienvenida y demás cajas del dashboard de WordPress
function quitar_cajas_escritorio()
{
	remove_action('welcome_panel', 'wp_welcome_panel');
	remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
	remove_meta_box('dashboard_primary', 'dashboard', 'side');
	remove_meta_box('dashboard_secondary', 'dashboard', 'side');
	remove_meta_box('dashboard_activity', 'dashboard', 'normal');
	remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'quitar_cajas_escritorio' );


?>