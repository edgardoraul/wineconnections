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
<body>
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
			<h1 class="header__logoTexto">
				<a href="index.html" class="header__logoTexto__enlace">
					Wine <span class="header__logoTexto__enlace--texto">Connections</span>
				</a>
			</h1>

			<!-- Bloque Oculto de la navegación -->
			<nav class="header__nav">
				<div class="navegacion">
					<ul id="header_nav" class="navegacion__lista animated ">
						<li class="navegacion__lista__item navegacion__lista__item--activo">
							<a class="navegacion__lista__item__enlace" href="index.html">Home<i
									class="icomoon icon-home"></i></a>
						</li>
						<li class="navegacion__lista__item">
							<a class="navegacion__lista__item__enlace" href="wines.html">Wines<i
									class="icomoon icon-wine"></i></a>
						</li>
						<li class="navegacion__lista__item">
							<a class="navegacion__lista__item__enlace" href="#">Wineries<i
									class="icomoon icon-plus"></i></a>

							<!-- Submenú -->
							<ul class="navegacion__lista sublista">
								<li class="navegacion__lista__item">
									<a href="#" class="navegacion__lista__item__enlace">Winery listing</a>
								</li>
								<li class="navegacion__lista__item">
									<a href="#" class="navegacion__lista__item__enlace">List your winery <i
											class="icomoon icon-plus"></i></a>

									<!-- Sub Submenú -->
									<ul class="navegacion__lista sublista">
										<li class="navegacion__lista__item">
											<a href="#" class="navegacion__lista__item__enlace">Overview</a>
										</li>
										<li class="navegacion__lista__item">
											<a href="#" class="navegacion__lista__item__enlace">Set Up</a>
										</li>
										<li class="navegacion__lista__item">
											<a href="#" class="navegacion__lista__item__enlace">Financials</a>
										</li>
										<li class="navegacion__lista__item">
											<a href="#" class="navegacion__lista__item__enlace">Additional Services</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="navegacion__lista__item">
							<a class="navegacion__lista__item__enlace" href="#">Who we are <i
									class="icomoon icon-plus"></i></a>

							<!-- Submenú -->
							<ul class="navegacion__lista sublista">
								<li class="navegacion__lista__item">
									<a href="#" class="navegacion__lista__item__enlace">About Us</a>
								</li>
								<li class="navegacion__lista__item">
									<a href="#" class="navegacion__lista__item__enlace">Contact Us</a>
								</li>
								<li class="navegacion__lista__item">
									<a href="#" class="navegacion__lista__item__enlace">FAQ</a>
								</li>
								<li class="navegacion__lista__item">
									<a href="#" class="navegacion__lista__item__enlace">Privacy Policy</a>
								</li>
								<li class="navegacion__lista__item sublista__item">
									<a href="#" class="navegacion__lista__item__enlace">Privacy Policy</a>
								</li>
								<li class="navegacion__lista__item sublista__item">
									<a href="#" class="navegacion__lista__item__enlace">Terms and conditions</a>
								</li>
							</ul>
						</li>
						<li class="navegacion__lista__item">
							<a class="navegacion__lista__item__enlace" href="#">My shop <i class="icomoon icon-cart">
								</i></a>
						</li>
						<li class="navegacion__lista__item">
							<a class="navegacion__lista__item__enlace" href="#">My account <i class="icomoon icon-user">
								</i></a>
						</li>
					</ul>
				</div>
			</nav>

			<!-- Bloque botones de acción -->
			<div class="header__boton">
				<a href="journeys.html" class="header__boton__enlace boton boton--chico boton--advertencia">Get Start<i
						class="separador"></i><i class="icomoon icon-arrow-right2"></i></a>
			</div>
		</div>
	</header>