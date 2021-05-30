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

get_header();?>

	<main>
		<div class="main grid grid--pagina">


			<!-- El título principal de la página -->
			<header class="encabezado grid--pagina__header">
				<h1 class="encabezado__titulo">Wines</h1>
				<form class="encabezado__formulario formulario">
					<label class="formulario__label" for="search">
						<input type="search" name="search" id="search" />
						<button role="button" class="formulario__label__boton">
							<i class="icon-search1"></i>
						</button>
					</label>
				</form>
			</header>

			<!-- La barra lateral y los filtros -->
			<div class="sidebar grid--pagina__sidebar">
				<aside>
					<!-- otro formulario de búsqueda -->
					<form class="sidebar__searchForm">
						<div class="sidebar__searchForm__input">
							<input class="" type="search" name="search" id="search" />
						</div>
						<div class="sidebar__searchForm__boton">
							<button role="button" class="sidebar__searchForm__boton">
								<i class="icon-search1"></i>
							</button>
						</div>
						<div class="sidebar__searchForm__boton">
							<button class="sidebar__searchForm__boton" id="botonFiltro">
								<sup>Filtro</sup>
								<i class="icomoon icon-list"></i>
							</button>
						</div>
					</form>




					<!-- Los widgets -->
					<div class="widget widget__filtro">
						<header class="widget__header centrado">
							<h3 class="widget__header__titulo">Filtro 1</h3>
						</header>
						<form action="">
							<div class="widget__contenido">
								<label class="formulario__label--boton" for="filtro_1">
									<h5 class="widget__contenido__titulo">Color
									</h5>
								</label>
								<input type="checkbox" class="formulario__input--checkbox" name="filtro_1" id="filtro_1" />
	
								<div class="widget__contenido__formulario">
									<div class="opcion">
										<input type="checkbox" class="formulario__input--checkbox" name="rojo" id="rojo" value="1" />
										<label class="formulario__label" for="rojo">
											Rojo
										</label>
									</div>								
									<div class="opcion">
										<input type="checkbox" class="formulario__input--checkbox" name="verde" id="verde" value="2" />
										<label class="formulario__label" for="verde">
											Verde
										</label>
									</div>
									<div class="opcion">
										<input type="checkbox" class="formulario__input--checkbox" name="amarillo" id="amarillo" value="3" />
										<label class="formulario__label" for="amarillo">
											Amarillo
										</label>
									</div>
								</div>
							</div>
							<div class="widget__contenido">
								<label class="formulario__label--boton" for="filtro_2">
									<h5 class="widget__contenido__titulo">Tipo de Uva
									</h5>
									<input type="checkbox" class="formulario__input--checkbox" name="filtro_2" id="filtro_2" />
									<div class="widget__contenido__formulario">
										<div class="opcion">
											<input  type="checkbox" class="formulario__input--checkbox" name="torrontes" id="torrontes" value="1" />
											<label class="formulario__label" for="torrontes">
												Torrontés
											</label>
										</div>								
										<div class="opcion">
											<input type="checkbox" class="formulario__input--checkbox" name="chinche" id="chinche" value="2" />
											<label class="formulario__label" for="chinche">
												Chinche
											</label>
										</div>
										<div class="opcion">
											<input type="checkbox" class="formulario__input--checkbox" name="moscatel" id="moscatel" value="3" />
											<label class="formulario__label" for="moscatel">
												Moscatel
											</label>
										</div>
									</div>
								</label>
							</div>
							<div class="widget__contenido">
								<label class="formulario__label--boton" for="filtro_3">
									<h5 class="widget__contenido__titulo">Ordenar por criterios
									</h5>
									<input type="checkbox" class="formulario__input--checkbox" name="filtro_3" id="filtro_3" />
									<div class="widget__contenido__formulario">
										<div class="opcion--bloque">
											<input class="formulario__input--radio" type="radio" name="filtro3" id="precio" />
											<label class="formulario__label--radio" for="precio">
												Precio
												<i class="icomoon icon-radio-unchecked"></i>
											</label>
										</div>

										<div class="opcion--bloque">
											<input class="formulario__input--radio" type="radio" name="filtro3" id="region" />
											<label class="formulario__label--radio" for="region">
												Región
												<i class="icomoon icon-radio-unchecked"></i>
											</label>
										</div>
									</div>
								</label>
							</div>
							<div class="subtitulo">
								<button type="reset" role="button" class="boton boton--chico boton--advertencia">Reset</button>
								<button type="submit" role="button" class="boton boton--chico boton--transparente">Done</button>
							</div>
						</form>
					</div>
				</aside>
			</div>

			<!-- El contenido principal -->
			<section class="contenedor grid--pagina__contenedor">
				<header class="subtitulo">
					<h3 class="subtitulo__texto">Todos los Wines</h3>
				</header>

				<!-- Sección Principal -->
				<div class="contenedor__seccion contenedor_cards grid grid--semiespaciada">

					<!-- Card1 -->
					<article class="card1">
						<figure class="card1__figura">
							<img src="img/21.jpg" alt="vino" class="card1__figura__imagen" >
							<figcaption class="card1__figura__titulo">
								Vini Nocheterna
							</figcaption>
						</figure>
						<div class="card1__contenedor">
							<ul class="card1__contenedor__lista">
								<li class="card1__contenedor__lista__item">Marca: <span>Nocheterna</span></li>
								<li class="card1__contenedor__lista__item">Región: <span>San Juan</span></li>
								<li class="card1__contenedor__lista__item">Bodega: <span>Putruelle</span></li>
								<li class="card1__contenedor__lista__item">Raiting: <i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i></li>
								<li class="card1__contenedor__lista__item">Lorem hitlex dolor sit amet consectetur adipisicing elit. Porro, voluptatum. Reprehenderit odit beatae totam consequatur? Rerum accusamus hitlex perferendis.</li>
							</ul>
						</div>
						<div class="card1__atrib">

							<div class="card1__atrib__final"><span>$ 800</span></div>
							<a href="" class="boton boton--redondo">
								<i class="icomoon icon-plus"></i>
							</a>
						</div>
					</article>
					<article class="card1">
						<figure class="card1__figura">
							<img src="img/21.jpg" alt="vino" class="card1__figura__imagen" >
							<figcaption class="card1__figura__titulo">
								Vini Nocheterna
							</figcaption>
						</figure>
						<div class="card1__contenedor">
							<ul class="card1__contenedor__lista">
								<li class="card1__contenedor__lista__item">Marca: <span>Nocheterna</span></li>
								<li class="card1__contenedor__lista__item">Región: <span>San Juan</span></li>
								<li class="card1__contenedor__lista__item">Bodega: <span>Putruelle</span></li>
								<li class="card1__contenedor__lista__item">Raiting: <i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i></li>
								<li class="card1__contenedor__lista__item">Lorem hitlex dolor sit amet consectetur adipisicing elit. Porro, voluptatum. Reprehenderit odit beatae totam consequatur? Rerum accusamus hitlex perferendis.</li>
							</ul>
						</div>
						<div class="card1__atrib">

							<div class="card1__atrib__final"><span>$ 800</span></div>
							<a href="" class="boton boton--redondo">
								<i class="icomoon icon-plus"></i>
							</a>
						</div>
					</article>
					<article class="card1">
						<figure class="card1__figura">
							<img src="img/21.jpg" alt="vino" class="card1__figura__imagen" >
							<figcaption class="card1__figura__titulo">
								Vini Nocheterna
							</figcaption>
						</figure>
						<div class="card1__contenedor">
							<ul class="card1__contenedor__lista">
								<li class="card1__contenedor__lista__item">Marca: <span>Nocheterna</span></li>
								<li class="card1__contenedor__lista__item">Región: <span>San Juan</span></li>
								<li class="card1__contenedor__lista__item">Bodega: <span>Putruelle</span></li>
								<li class="card1__contenedor__lista__item">Raiting: <i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i></li>
								<li class="card1__contenedor__lista__item">Lorem hitlex dolor sit amet consectetur adipisicing elit. Porro, voluptatum.</li>
							</ul>
						</div>
						<div class="card1__atrib">

							<div class="card1__atrib__final"><span>$ 800</span></div>
							<a href="" class="boton boton--redondo">
								<i class="icomoon icon-plus"></i>
							</a>
						</div>
					</article>
					<article class="card1">
						<figure class="card1__figura">
							<img src="img/21.jpg" alt="vino" class="card1__figura__imagen" >
							<figcaption class="card1__figura__titulo">
								Vini Nocheterna
							</figcaption>
						</figure>
						<div class="card1__contenedor">
							<ul class="card1__contenedor__lista">
								<li class="card1__contenedor__lista__item">Marca: <span>Nocheterna</span></li>
								<li class="card1__contenedor__lista__item">Región: <span>San Juan</span></li>
								<li class="card1__contenedor__lista__item">Bodega: <span>Putruelle</span></li>
								<li class="card1__contenedor__lista__item">Raiting: <i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i></li>
								<li class="card1__contenedor__lista__item">Lorem hitlex dolor sit amet consectetur adipisicing elit. Porro, voluptatum. Reprehenderit odit beatae totam consequatur? Rerum accusamus hitlex perferendis.</li>
							</ul>
						</div>
						<div class="card1__atrib">

							<div class="card1__atrib__final"><span>$ 800</span></div>
							<a href="" class="boton boton--redondo">
								<i class="icomoon icon-plus"></i>
							</a>
						</div>
					</article>
					<article class="card1">
						<figure class="card1__figura">
							<img src="img/21.jpg" alt="vino" class="card1__figura__imagen" >
							<figcaption class="card1__figura__titulo">
								Vini Nocheterna
							</figcaption>
						</figure>
						<div class="card1__contenedor">
							<ul class="card1__contenedor__lista">
								<li class="card1__contenedor__lista__item">Marca: <span>Nocheterna</span></li>
								<li class="card1__contenedor__lista__item">Región: <span>San Juan</span></li>
								<li class="card1__contenedor__lista__item">Bodega: <span>Putruelle</span></li>
								<li class="card1__contenedor__lista__item">Raiting: <i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i></li>
								<li class="card1__contenedor__lista__item">Lorem hitlex dolor sit amet consectetur adipisicing elit. Porro, voluptatum. Reprehenderit odit beatae totam consequatur? Rerum accusamus hitlex perferendis.</li>
							</ul>
						</div>
						<div class="card1__atrib">

							<div class="card1__atrib__final"><span>$ 800</span></div>
							<a href="" class="boton boton--redondo">
								<i class="icomoon icon-plus"></i>
							</a>
						</div>
					</article>
					<article class="card1">
						<figure class="card1__figura">
							<img src="img/21.jpg" alt="vino" class="card1__figura__imagen" >
							<figcaption class="card1__figura__titulo">
								Vini Nocheterna
							</figcaption>
						</figure>
						<div class="card1__contenedor">
							<ul class="card1__contenedor__lista">
								<li class="card1__contenedor__lista__item">Marca: <span>Nocheterna</span></li>
								<li class="card1__contenedor__lista__item">Región: <span>San Juan</span></li>
								<li class="card1__contenedor__lista__item">Bodega: <span>Putruelle</span></li>
								<li class="card1__contenedor__lista__item">Raiting: <i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i></li>
								<li class="card1__contenedor__lista__item">Lorem hitlex dolor sit amet consectetur adipisicing elit. Porro, voluptatum. Reprehenderit odit beatae totam consequatur? Rerum accusamus hitlex perferendis.</li>
							</ul>
						</div>
						<div class="card1__atrib">

							<div class="card1__atrib__final"><span>$ 800</span></div>
							<a href="" class="boton boton--redondo">
								<i class="icomoon icon-plus"></i>
							</a>
						</div>
					</article>
					<article class="card1">
						<figure class="card1__figura">
							<img src="img/21.jpg" alt="vino" class="card1__figura__imagen" >
							<figcaption class="card1__figura__titulo">
								Vini Nocheterna
							</figcaption>
						</figure>
						<div class="card1__contenedor">
							<ul class="card1__contenedor__lista">
								<li class="card1__contenedor__lista__item">Marca: <span>Nocheterna</span></li>
								<li class="card1__contenedor__lista__item">Región: <span>San Juan</span></li>
								<li class="card1__contenedor__lista__item">Bodega: <span>Putruelle</span></li>
								<li class="card1__contenedor__lista__item">Raiting: <i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i>
									<i class="icomoon icon-star-full"></i></li>
								<li class="card1__contenedor__lista__item">Reprehenderit odit beatae totam consequatur? Rerum accusamus hitlex perferendis.</li>
							</ul>
						</div>
						<div class="card1__atrib">

							<div class="card1__atrib__final"><span>$ 800</span></div>
							<a href="" class="boton boton--redondo">
								<i class="icomoon icon-plus"></i>
							</a>
						</div>
					</article>
				</div>
			</section>

			<!-- Paginación -->
			<div class="paginacion grid--pagina__paginacion">
				<a href="" class="boton boton--chico"><i class="icomoon icon-arrow-left2"></i></a>
				<a href="" class="boton boton--chico boton--deshabilitado">1</a>
				<a href="" class="boton boton--chico">2</a>
				<a href="" class="boton boton--chico">3</a>
				<a href="" class="boton boton--chico"><i class="icomoon icon-arrow-right2"></i></a>
			</div>
		</div>

	</main>

	<?php get_footer();?>