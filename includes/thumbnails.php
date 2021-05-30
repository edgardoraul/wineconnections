<?php
// Brindando soporte de imágenes y miniaturas a la web
// Definir tamaños personalizados de miniaturas - hay que configurarlas
add_theme_support('post-thumbnails', array( 'post', 'page', 'post_type_journey', 'post_type_panel', 'post_type_num_pasos' ));

// Las thumbnails por defecto
the_post_thumbnail( 'thumbnail' );
the_post_thumbnail( 'medium' );
the_post_thumbnail( 'large' );
the_post_thumbnail( 'full' );

// Tamaños fijos recortados
add_image_size('custom-thumb-100-100', 100, 100, true);
add_image_size('custom-thumb-200-200', 200, 200, true);
add_image_size('custom-thumb-300-200', 300, 200, true);
add_image_size('custom-thumb-300-300', 300, 300, true);
add_image_size('custom-thumb-400-300', 400, 300, true);
add_image_size('custom-thumb-600-400', 600, 400, true);
add_image_size('custom-thumb-600-600', 600, 600, true);
add_image_size('custom-thumb-900-600', 900, 600, true);
add_image_size('custom-thumb-900-900', 900, 900, true);
add_image_size('custom-thumb-1200-900', 1200, 900, true);
add_image_size('custom-thumb-1200-900', 1500, 1200, true);
add_image_size('custom-thumb-1200-900', 1800, 1200, true);
add_image_size('custom-thumb-1200-900', 2400, 2000, true);

// Sliders
add_image_size('custom-thumb-600-250', 1200, 500, true);
add_image_size('custom-thumb-900-333', 1800, 666, true);
add_image_size('custom-thumb-1200-500', 2400, 1000, true);
add_image_size('custom-thumb-1500-700', 3000, 1400, true);

// Fotos redimensionables según el tamaño de pantalla
add_image_size('custom-thumb-100-x', 200, false);
add_image_size('custom-thumb-200-x', 400, false);
add_image_size('custom-thumb-300-x', 600, false);
add_image_size('custom-thumb-600-x', 1200, false);
add_image_size('custom-thumb-900-x', 1800, false);
add_image_size('custom-thumb-1200-x', 2400, false);
add_image_size('custom-thumb-1500-x', 3000, false);


// Añadiendo al listado del gestor de multimedia
add_filter('image_size_names_choose', 'hmuda_image_sizes');
function hmuda_image_sizes($sizes)
{
	$addsizes = array(
		// Tamaños fijos
		"custom-thumb-100-100"		=>	__("Tamaño recortado 1"),
		"custom-thumb-200-200"		=>	__("Tamaño recortado 2"),
		"custom-thumb-300-200"		=>	__("Tamaño recortado 3"),
		"custom-thumb-300-300"		=>	__("Tamaño recortado 4"),
		"custom-thumb-400-300"		=>	__("Tamaño recortado 5"),
		"custom-thumb-600-400"		=>	__("Tamaño recortado 6"),
		"custom-thumb-600-600"		=>	__("Tamaño recortado 7"),
		"custom-thumb-900-600"		=>	__("Tamaño recortado 8"),
		"custom-thumb-900-900"		=>	__("Tamaño recortado 9"),
		"custom-thumb-1200-900"		=>	__("Tamaño recortado 10"),


		// Tamaños adaptables
		"custom-thumb-100-x"		=>	__("Tamaño adaptable 1"),
		"custom-thumb-200-x"		=>	__("Tamaño adaptable 2"),
		"custom-thumb-300-x"		=>	__("Tamaño adaptable 3"),
		"custom-thumb-600-x"		=>	__("Tamaño adaptable 4"),
		"custom-thumb-900-x"		=>	__("Tamaño adaptable 5"),
		"custom-thumb-1200-x"		=>	__("Tamaño adaptable 6"),
		"custom-thumb-1500-x"		=>	__("Tamaño adaptable 7"),
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}


/* HABILITAR FUNCION DE WEBP Y SVG */
function comaporter_mime_types($mimes)
{
	$mimes['webp'] = 'image/webp';
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'comaporter_mime_types');

function comaporter_webp_is_displayable($result, $path)
{
	if( $result === false )
	{
		$displayable_image_types = array( IMAGETYPE_WEBP );
		$info = @getimagesize( $path );
		if( empty($info) )
		{
			$result = false;
		}
		elseif( !in_array($info[2], $displayable_image_types) )
		{
			$result = false;
		}
		else
		{
			$result = true;
		}
	}
	return true;
}
add_filter('file_is_displayable_image', 'comaporter_webp_is_displayable', 10, 2);
?>