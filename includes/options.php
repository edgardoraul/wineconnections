<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
/*function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}*/
function optionsframework_option_name() {

	// Nombre de la plantilla
	$themename = wp_get_theme();
	$themename = preg_replace("/W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'villabrochero'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */


function optionsframework_options()
{
	//Pestaña Configuración general
	$options[]	=	array(
	'name'	=>	__('Configuración General', 'options_framework_theme'),
	'type'	=>	'heading');

	//Cambio del logo
	$options[]	=	array(
	'name'	=>	__('Logotipo del Sitio Web', 'options_check'),
	'desc'	=>	__('Selecciona el logo a mostrar en la web, tamaño 100px x 100px.', 'options_check'),
	'id'	=>	'logo_uploader',
	'type'	=>	'upload');

	// Background normal del sitio web
	$options[]	=	array(
	'name'	=>	__('Color de Fondo de la web', 'options_framework_theme'),
	'desc'	=>	__('Selecciona un color de fondo.', 'options_framework_theme'),
	'id'	=>	'color_de_la_web',
	'type'	=>	'color',
	'class'	=>	'');

	// Ancho de la Web
	$imagepath =  get_template_directory_uri() . '/includes/images/';
	$options[] = array(
		'name'		=>	__('Cómo quieres que sea vea la web en las pantallas?', 'options_framework_theme'),
		'desc'		=>	__('Selecciona un de dos: angosto, o ancho total.', 'options_framework_theme'),
		'id'		=>	'ancho_de_la_web',
		'std'		=>	"angosto",
		'type'		=>	"images",
		'options'	=>	array(
			'angosto'		=>	$imagepath . 'angosto.jpg',
			'ancho_total'	=>	$imagepath . 'fullwidth.jpg',
		)
	);

	// Meta: keywords
	$options[]	=	array(
		'name'			=>	__('Palabras claves', 'options_framework_theme'),
		'desc'			=>	__('Introducir palabras claves de la web que son útiles para algunos buscadores. Muy importantes para SEO.', 'options_framework_theme'),
		'id'			=>	'meta_keywords2',
		'placeholder'	=>	'palabra1, palabra2, palabra3...',
		'class'			=>	'',
		'type'			=>	'text',
	);

	// Data Fiscal
	$options[]	=	array(
		'name'			=>	__('Data Fiscal', 'options_framework_theme'),
		'desc'			=>	__('Introduzca su enlace al Data Fiscal de AFIP o entidad gubernamental impositiva.', 'options_framework_theme'),
		'id'			=>	'data_fiscal',
		'placeholder'	=>	'<a href="datafiscal"><img src="https://www.afip.gov.ar/datafiscal.jpg" /></a>',
		'class'			=>	'',
		'type'			=>	'textarea'
	);

	// Google Analitics
	$options[]	=	array(
		'name'			=>	__('Google Analitycs', 'options_framework_theme'),
		'desc'			=>	__('Introduzca el script de Google Analitycs.', 'options_framework_theme'),
		'id'			=>	'google_analitycs',
		'placeholder'	=>	'var _gaq = _gaq || []; _gaq.push(["_setAccount", "UA-40089469-1"]); _gaq.push(["_trackPageview"]); etc...',
		'class'			=>	'',
		'type'			=>	'textarea'
	);


	/*====================================================================================*/
	/* =================== Pestaña información de contacto ============================== */
	$options[]	=	array(
	'name'	=>	__('Redes Sociales', 'options_framework_theme'),
	'type'	=>	'heading' );

	// Facebook
	$options[] = array(
		'name'			=>	__('Facebook', 'options_framework_theme'),
		'desc'			=>	__('Introduzca el enlace a Facebook.', 'options_framework_theme'),
		'id'			=>	'facebook_contact',
		'class'			=>	'',
		'placeholder'	=>	'www.facebook.com/usuario',
		'type'			=>	'text'
	);


	// Twitter
	$options[] = array(
		'name' => __('Twitter', 'options_framework_theme'),
		'desc' => __('Introduzca su enlace a Twitter.', 'options_framework_theme'),
		'id' => 'twitter_contact',
		'placeholder' => 'www.twitter.com/usuario',
		'class' => '',
		'type' => 'text'
	);

	// LinkedIn
	$options[] = array(
		'name' => __('LinkedIn', 'options_framework_theme'),
		'desc' => __('Introduzca su enlace al perfil de LinkedIn.', 'options_framework_theme'),
		'id' => 'linkedin_contact',
		'placeholder' => 'www.linkedin.com/usuario',
		'class' => '',
		'type' => 'text'
	);

	// Google+
	$options[] = array(
		'name' => __('Google+', 'options_framework_theme'),
		'desc' => __('Introduzca su enlace a Google+.', 'options_framework_theme'),
		'id' => 'google_plus_contact',
		'placeholder' => 'plus.google.com/usuario',
		'class' => '',
		'type' => 'text'
	);

	// Youtube
	$options[] = array(
		'name' => __('Youtube', 'options_framework_theme'),
		'desc' => __('Introduzca su enlace a Youtube.', 'options_framework_theme'),
		'id' => 'youtube_contact',
		'placeholder' => 'www.youtube.com/cana_de_usuario',
		'class' => '',
		'type' => 'text'
	);

	// Add This
	$options[] = array(
		'name' => __('Compartir en Redes Sociales', 'options_framework_theme'),
		'desc' => __('Introduzca el enlace a AddThis.', 'options_framework_theme'),
		'id' => 'add_this',
		'placeholder' => '<a class="addthis_button alignright" href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4c8ff9282b8657a0">...',
		'class' => '',
		'type' => 'textarea'
	);
	$options[] = array(
		'name' => __('Script de AddThis', 'options_framework_theme'),
		'desc' => __('Introduzca el script de AddThis.', 'options_framework_theme'),
		'id' => 'add_this_script',
		'placeholder' => 'http://www.addthis.com/script/blablablabal...',
		'class' => '',
		'type' => 'text'
	);


	$facebook_contact = of_get_option('facebook_contact','');
	$twitter_contact = of_get_option('twitter_contact','');
	$linkedin_contact = of_get_option('linkedin_contact', '');
	$google_plus_contact = of_get_option('google_plus_contact','');
	$email_contact = of_get_option('email_contact','');
	$email_contact_ventas = of_get_option('email_contact_ventas','');
	$background_de_la_web = of_get_option('background_de_la_web','');

	/* para guardar los campos en variable y para mostrarlos con un condicional
	<ul>
		<?php
			if($tel_contact){echo "<li><strong>Teléfono:</strong>" . $tel_contact . "</li>";}
			if($email_contact){ echo "<li><strong>Email:</strong>" . $email_contact . "</li>";}
			if($dir_contact){ echo"<li><strong>Dirección:</strong>" . $dir_contact . "</li>";}
			if($cp_contact){echo"<li><strong>Cp:</strong>" . $cp_contact . "</li>";}
		?>
	</ul>

	*/

	/* ============================================================================== */
	/* Panel de la home page =========================================================*/
	$options[] = array(
	'name' => __('Datos de Contacto', 'options_framework_theme'),
	'type' => 'heading');

	// Email de contacto
	$options[] = array(
		'name' => __('E-mail de contacto', 'options_framework_theme'),
		'desc' => __('Introduzca el Email de contacto, se mostrará al pie del sitio web en un ícono.', 'options_framework_theme'),
		'id' => 'email_contact',
		'placeholder' => 'tu-mail@lo-que-sea.com.ar',
		'class' => '',
		'type' => 'text'
	);

	// Email de Ventas
	$options[] = array(
		'name' => __('E-mail de Ventas', 'options_framework_theme'),
		'desc' => __('Introduzca el Email para el departamento de Ventas, se mostrará al pie del sitio web en un ícono.', 'options_framework_theme'),
		'id' => 'email_contact_ventas',
		'placeholder' => 'ventas@lo-que-sea.com.ar',
		'class' => '',
		'type' => 'text'
	);

	// Teléfono Fijo
	$options[] = array(
		'name' => __('Teléfono Fijo', 'options_framework_theme'),
		'desc' => __('Introduzca su teléfono fijo incluyendo el código de área.', 'options_framework_theme'),
		'id' => 'telefono_fijo',
		'placeholder' => '0351-4882213',
		'class' => 'mini',
		'type' => 'text'
	);

	// Teléfono Celular
	$options[] = array(
		'name' => __('Teléfono Celular', 'options_framework_theme'),
		'desc' => __('Introduzca su teléfono celular incluyendo el código de área.', 'options_framework_theme'),
		'id' => 'telefono_celular',
		'placeholder' => '0351-15882213',
		'class' => 'mini',
		'type' => 'text'
	);

	// Dirección
	$options[] = array(
		'name' => __('Dirección', 'options_framework_theme'),
		'desc' => __('Introduzca calle, número, ciudad y provincia.', 'options_framework_theme'),
		'id' => 'direccion_web',
		'placeholder' => __('Man Sartín 453, Dpto. 3, Las Catitas, Tierra del Agua.', 'villabrochero'),
		'class' => 'small',
		'type' => 'editor'
	);
	// Lunes a viernes de 9 a 13 hs y de 16 a 20 hs sábados de 9 a 13 hs.
	// Días y horario de atención al público
	$options[] = array(
		'name' => __('Horario de atención', 'options_framework_theme'),
		'desc' => __('Introduzca los días de la semana y el horario de atención al público.', 'options_framework_theme'),
		'id' => 'horario_web',
		'placeholder' => __('Domingos a Martes; de 2 de la tarde a 14hs.', 'villabrochero'),
		'class' => 'small',
		'type' => 'editor'
	);


	/* ============================================================================== */
	/* Panel de la home page =========================================================*/
	$options[] = array(
	'name' => __('Banner Publicitario', 'options_framework_theme'),
	'type' => 'heading');

	// Banner Publicitario
	$options[] = array(
	'name' => __('Banner de publicidad', 'options_check'),
	'desc' => __('Selecciona un banner .gif a mostrar en la web, tamaño 300x300.', 'options_check'),
	'id' => 'banner_web',
	'type' => 'upload');

	// Almacenamos las páginas de wordpress
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = __('Seleccione una página:', 'villabrochero');
	foreach ($options_pages_obj as $page)
	{
		$options_pages[$page->ID] = $page->post_title;
	}

	// Elegir la página al cual se enlazará el botón principal
	$options[] = array(
		'name' => __('Enlace del banner', 'options_framework_theme'),
		'desc' => __('Elegir a cual página se enlazará el banner de publicidad. Si no se elige ninguna, se mostrará en una ventana emergente el contenido que cargue a continuación.', 'options_framework_theme'),
		'id' => 'enlace_banner',
		'std' => 'three',
		'type' => 'select',
		'class' => 'small', //mini
		'options' => $options_pages
		);

	// Campo de texto
	$options[] = array(
		'name' => __('Contenido', 'options_framework_theme'),
		'desc' => __('Introduzca el contenido que se mostrará al hacer click en el banner publicitario, solo en el caso de que no se elija ninguna página como enlace final.', 'options_framework_theme'),
		'id' => 'contenido_banner',
		'placeholder' => __('Contenido del banner publicitario...', 'villabrochero'),
		'class' => 'big',
		'type' => 'editor',
		// 'settings' => $wp_editor_settings,
	);
	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	// Banner Publicitario 2
	$options[] = array(
	'name' => __('Banner de publicidad 2', 'options_check'),
	'desc' => __('Selecciona un banner .gif a mostrar en la web, tamaño 300x300.', 'options_check'),
	'id' => 'banner_web_2',
	'type' => 'upload');

	// Enlace de este banner
	$options[] = array(
		'name' => __('Enlace personalizado del banner 2', 'options_framework_theme'),
		'desc' => __('Introduzca si o si un enlace hacia un sitio web en particular deseado.', 'options_framework_theme'),
		'id' => 'banner_web_2_enlace',
		'placeholder' => 'www.tusitioweb.com.ar',
		'class' => '',
		'type' => 'text'
	);
	return $options;
}