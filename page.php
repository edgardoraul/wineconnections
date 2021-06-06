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

get_header();
get_sidebar();

if ( have_posts() ) : while ( have_posts() ) : the_post();?>

		<!-- El contenido principal -->
		<section class="contenedor grid--pagina__contenedor">
<!-- 			<header class="subtitulo">
				<h3 class="subtitulo__texto"><?php the_title();?></h3>
			</header> -->
			<!-- Sección Principal -->
			<div class="contenedor__seccion contenedor_cards grid grid--semiespaciada">
				<article>
					<?php
					if( has_post_thumbnail() )
					{
						the_post_thumbnail('custom-thumb-900-333');
					}
					the_content();?>
				</article>
			</div>
		</section>
	</div>

<?php endwhile;
else: _e("No hay nada", 'wineconections');
endif;
get_footer();
?>