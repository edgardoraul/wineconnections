<?php
/* Los números de paso con imágenes y texto - Sección 2 */
// WP_Query arguments
$args = array(
	'post_type'              => array( 'post_type_num_pasos' ),
	'nopaging'               => true,
	'order'                  => 'ASC',
	'orderby'                => 'menu_order',
	'cache_results'          => true,
	'update_post_meta_cache' => true,
	'update_post_term_cache' => true,
);

$numero_orden = 1;

// The Query
$query_custom_post_type_num_pasos = new WP_Query( $args );?>

<!-- LOS NUMEROS DE ORDEN - SECCIÓN 2 -->
<section class="granTitular">
	<header class="granTitular__header">
		<h2 class="granTitular__header__titulo"><?php _e('¿Cómo trabajamos?', 'wineconections');?></h2>
	</header>
	<div class="pasos izquierda">

<?php // The Loop
if ( $query_custom_post_type_num_pasos->have_posts() ) {
	while ( $query_custom_post_type_num_pasos->have_posts() ) {
		$query_custom_post_type_num_pasos->the_post();
		// do something ?>
	<div class="main__seccion3">
		<article class="main__seccion3__articulo">
			<div class="main__seccion3__articulo__media">
				<div class="main__seccion3__articulo__media__orden"><?php echo $numero_orden++;?></div>
				<?php if(has_post_thumbnail()) {
					the_post_thumbnail( 'custom-thumb-300-x' );
				} else { ;?>
				<img class="main__seccion3__articulo__media__imagen" src="<?php bloginfo('stylesheet_directory');?>/img/26.png" alt="alt" />
				<?php };?>
			</div>
			<header class="main__seccion3__articulo__header">
				<h3 class="main__seccion3__articulo__header__titulo"><?php the_title();?></h3>
			</header>
			<div class="main__seccion3__articulo__contenido">
				<?php the_content();?>
			</div>
		</article>
	</div>
		
	<?php }
} else {
	// no posts found ?>
	<div class="main__seccion3">
		<article class="main__seccion3__articulo">
			<div class="main__seccion3__articulo__media">
				<div class="main__seccion3__articulo__media__orden">1</div>
				<img class="main__seccion3__articulo__media__imagen" src="<?php bloginfo('stylesheet_directory');?>/img/26.png" alt="alt" />
			</div>
			<header class="main__seccion3__articulo__header">
				<h3 class="main__seccion3__articulo__header__titulo">Lorem ipsum dolor sit amet</h3>
			</header>
			<div class="main__seccion3__articulo__contenido">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui consequuntur similique, illo
				maxime ea quibusdam necessitatibus impedit nulla distinctio unde numquam dolores dicta
				corporis laudantium eum mollitia aliquid quasi error.
			</div>
		</article>
	</div>
	<div class="main__seccion3">
		<article class="main__seccion3__articulo">
			<div class="main__seccion3__articulo__media">
				<div class="main__seccion3__articulo__media__orden">2</div>
				<img class="main__seccion3__articulo__media__imagen" src="<?php bloginfo('stylesheet_directory');?>/img/23.png" alt="alt" />
			</div>
			<header class="main__seccion3__articulo__header">
				<h3 class="main__seccion3__articulo__header__titulo">Lorem ipsum dolor sit amet</h3>
			</header>
			<div class="main__seccion3__articulo__contenido">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui consequuntur similique, illo
				maxime ea quibusdam necessitatibus impedit nulla distinctio unde numquam dolores dicta
				corporis um mollitia aliquid quasi error.
			</div>
		</article>
	</div>


<?php };?>

	</div>
</section>
<!-- FIN DE LOS NUMERO SDE PASOS - SECCIÓN 2-->
<div class="separador"></div>
<?php // Restore original Post Data
wp_reset_postdata();
?>