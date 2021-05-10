<?php
// Modifica el pie de página del panel de administarción
function remove_footer_admin()
{
	echo _e('Desarrollado por', 'wineconnections') . ' <a title="' . get_bloginfo("name") . '" href="' . get_bloginfo("url") . '" target="_blank"> <img src="' . get_bloginfo("stylesheet_directory") . '/img/logo.png" width="140" style="display: inline-block; vertical-align: middle;" alt="' . get_bloginfo("name") . '" /></a>';
};
add_filter('admin_footer_text', 'remove_footer_admin', 10);
?>