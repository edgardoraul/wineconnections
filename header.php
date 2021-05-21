<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?php
		bloginfo('name'); 
		if( get_bloginfo('description') )
		{
			echo ' - ';
			echo get_bloginfo('description');
		}
	?></title>
	<meta name="author" content="WebModerna">
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<!-- El header y la barra de navegación -->
	<header>
		<div class="header" id="header">

			<!-- Bloque botón menú -->
			<div class="header__boton__menu">
				<a href="#" id="boton__menu" class="header__boton__menu--enlace">
					<i class="icomoon icon-menu"></i>
				</a>
			</div>


			<!-- Bloque Logo -->
			<?php if ( function_exists( 'the_custom_logo' ) )
			{
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				
				if ( has_custom_logo() )
				{
					echo '<h1 class="header__logoTexto">';
					echo '<a href="'.get_bloginfo( 'url' ).'" class="header__logoTexto__enlace">';
					echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					echo '</a>';
					echo '</h1>';
				}
				else
				{
					echo '<h1 class="header__logoTexto">';
					echo '<a href="'.get_bloginfo( 'url' ).'" class="header__logoTexto__enlace">';
					echo get_bloginfo( 'name' );
					echo '</a>';
					echo '</h1>';
				}
			};?>
			


			<!-- Bloque Oculto de la navegación -->
			<nav class="header__nav">
				<div class="navegacion">
					<?php $menuPrincipal = array(
							'container'			=>	false,
							'depth'				=>	3,
							'menu'				=>	'header_nav',
							'theme_location'	=>	'header_nav',
							'items_wrap'		=>	'<ul id="header_nav" class="navegacion__lista animated ">%3$s</ul>',
						);
						wp_nav_menu( $menuPrincipal );?>
				</div>
			</nav>

			<!-- Bloque botones de acción -->
			<div class="header__boton">
				<a href="journeys.html" class="header__boton__enlace boton boton--chico boton--advertencia">Get Start<i	class="separador"></i><i class="icomoon icon-arrow-right2"></i></a>
			</div>
		</div>
	</header>