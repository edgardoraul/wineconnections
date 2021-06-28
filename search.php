<?php
/**
* search.php
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

			<div class="contenedor__seccion contenedor_cards grid grid--semiespaciada">
				<article>
					<?php
					if( has_post_thumbnail() )
					{
						the_post_thumbnail('custom-thumb-400-200');
					}
					else
					{
						echo '<img src="'.get_bloginfo('stylesheet_directory').'/img/17.jpg" alt="alt"/>';
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