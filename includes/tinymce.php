<?php
// Habilitar botones de edición avanzados
function habilitar_mas_botones( $buttons )
{
	$buttons[] = 'hr';
	$buttons[] = 'sub';
	$buttons[] = 'sup';
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'cleanup';
	$buttons[] = 'styleselect';
	return $buttons;
};
add_filter( "mce_buttons_3", "habilitar_mas_botones" );


// Más etiquetas html en el editor de contenido
function cambiar_opciones_mce($initArray)
{
	$ext = 'pre[id|name|class|style],iframe[align|longdesc| name|width|height|frameborder|scrolling|marginheight| marginwidth|src]';

	if ( isset( $initArray['extended_valid_elements'] ) )
	{
		$initArray['extended_valid_elements'] .= ',' . $ext;
	}
	else
	{
		$initArray['extended_valid_elements'] = $ext;
	}
	return $initArray;
}
add_filter('tiny_mce_before_init', 'cambiar_opciones_mce');
?>