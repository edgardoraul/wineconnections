<?php
/* Las secciones principales y con llamada a la acción */
// WP_Query arguments
$args = array(
	'post_type'              => array( 'post_type_principal' ),
	'nopaging'               => true,
	'order'                  => 'ASC',
	'orderby'                => 'menu_order',
	'cache_results'          => true,
	'update_post_meta_cache' => true,
	'update_post_term_cache' => true,
);


// The Query
$query_custom_post_type_principales = new WP_Query( $args );

?>

<!-- LAS SECCIONES PRINCIPALES -->
<section>
	<div class="main__seccion1 izquierda">
		
		<?php // The Loop
if ( $query_custom_post_type_principales->have_posts() )
{
	while ( $query_custom_post_type_principales->have_posts() )
	{
		$query_custom_post_type_principales->the_post();
		$imagen = get_the_post_thumbnail_url( get_the_ID(), 'custom-thumb-600-x' );
		$next_post = get_next_post();
		$next_post_id = "";
		if ( is_a( $next_post , 'WP_Post' ) )
		{
			$next_post_id = $next_post->ID;
		}
		else
		{
			$next_post_id = get_the_ID();
		}
		// do something
	
	
	?>
	<article style="background-image: url('<?php echo $imagen;?>');" class="main__seccion1__articulo" id="<?php echo get_the_ID();?>" name="<?php echo get_the_ID();?>">
		<div class="main__seccion1__articulo__contenedor">
			<header class="main__seccion1__articulo__contenedor__header">
				<h2 class="main__seccion1__articulo__contenedor__header--titulo">
					<?php the_title();?>
				</h2>
			</header>
			<div class="main__seccion1__articulo__contenedor__contenido">
			<?php echo get_the_content();?>
			</div>
			<div class="main__seccion1__articulo__contenedor__accion">
				<!-- <a href="#<?php echo $next_post_id;?>" class="boton">
					<?php _e('Siguiente ', 'wineconnections');?>
					<i class="separador"></i>
					<i class="icomoon icon-forward"></i>
				</a> -->
			</div>
		</div>
	</article>
		
	<?php }
} else {
	// no posts found ?>
	<article class="main__seccion1__articulo" id="1" name="1">
		<div class="main__seccion1__articulo__contenedor">
			<header class="main__seccion1__articulo__contenedor__header">
				<h2 class="main__seccion1__articulo__contenedor__header--titulo">
					Discover wines, paired to your tastes, delivered to your door
				</h2>
			</header>
			<div class="main__seccion1__articulo__contenedor__contenido">
				Suscipit quod iure laboriosam maiores nemo similique illum aperiam omnis? Reprehenderit sint repudiandae accusamus ipsum ducimus aut voluptates velit fugit doloribus. Libero!
			</div>
			<div class="main__seccion1__articulo__contenedor__accion">
				<!-- <a href="#2" class="boton">
					Get Journeys
					<i class="separador"></i>
					<i class="icomoon icon-forward"></i>
				</a> -->
			</div>
		</div>
	</article>


<?php };
	// Restore original Post Data
	wp_reset_postdata();
?>

	</div>
</section>