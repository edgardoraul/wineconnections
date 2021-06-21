		<div class="main grid grid--pagina">

			<!-- El título principal de la página -->
			<header class="encabezado grid--pagina__header">
				<h1 class="encabezado__titulo"><?php
				if(is_single())
				{
					the_title();
				}
				if(is_page())
				{
					the_title();
				}
				if(is_category())
				{
					the_category();
				}
				
				?>
				</h1>
				<form class="encabezado__formulario formulario"  action="<?php echo home_url( '/' );?>" method="get" role="search">
					<label class="formulario__label" for="search">
						<input type="search" name="search" id="search" />
						<button type="submit" role="button" class="formulario__label__boton">
							<i class="icomoon icon-search1"></i>
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
								<i class="icomoon icon-search1"></i>
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
		<?php 
			if ( is_active_sidebar( 'blog-sidebar-right' ) ) :
				dynamic_sidebar( 'blog-sidebar-right' );
			endif;
		?>