<!-- Slider de logotipos -->
<article class="main__seccion4__articulo">
	<header class="main__seccion4__articulo__header">
		<h3 class="main__seccion4__articulo__header__titulo">
			As seen of:
		</h3>
	</header>
	<div class="main__seccion4__articulo__contenido slider splide" id="splide1">
		<div class="splide__slider">
	

<?php
/* El loop que brinda los sliders */

if ( function_exists( 'ot_get_option' ) )
{
	/* get the slider array */
	$slides = ot_get_option( 'logos_de_las_marcas_los_auspiciantes', array() );

	
	
	if ( ! empty( $slides ) )
	{
		foreach( $slides as $slide )
		{
			echo '
				<img class="main__seccion4__articulo__contenido__logo splide__slide" src="' . $slide['image'] . '" alt="' . $slide['title'] . '" />
			';
		}
	}
else { ?>
		<img class="main__seccion4__articulo__contenido__logo" src="<?php bloginfo("stylesheet_directory");?>/img/27.png" alt="alt" />
		<img class="main__seccion4__articulo__contenido__logo" src="<?php bloginfo("stylesheet_directory");?>/img/27.png" alt="alt" />
		<img class="main__seccion4__articulo__contenido__logo" src="<?php bloginfo("stylesheet_directory");?>/img/27.png" alt="alt" />
		<img class="main__seccion4__articulo__contenido__logo" src="<?php bloginfo("stylesheet_directory");?>/img/27.png" alt="alt" />
		<img class="main__seccion4__articulo__contenido__logo" src="<?php bloginfo("stylesheet_directory");?>/img/27.png" alt="alt" />
		<img class="main__seccion4__articulo__contenido__logo" src="<?php bloginfo("stylesheet_directory");?>/img/27.png" alt="alt" />
		<img class="main__seccion4__articulo__contenido__logo" src="<?php bloginfo("stylesheet_directory");?>/img/27.png" alt="alt" />
		<img class="main__seccion4__articulo__contenido__logo" src="<?php bloginfo("stylesheet_directory");?>/img/27.png" alt="alt" />
		<img class="main__seccion4__articulo__contenido__logo" src="<?php bloginfo("stylesheet_directory");?>/img/27.png" alt="alt" />
		
	<?php }
}
;?>
		</div>
	</div>
</article>