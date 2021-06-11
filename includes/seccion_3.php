<?php
/* Los paneles con imágenes y texto - Sección 3: Imágenes con texto intercambiadas */
// WP_Query arguments
$args = array(
	'post_type'              => array( 'post_type_panel' ),
	'nopaging'               => true,
	'order'                  => 'ASC',
	'orderby'                => 'menu_order',
	'cache_results'          => true,
	'update_post_meta_cache' => true,
	'update_post_term_cache' => true,
);

// The Query
$query_custom_post_type_paneles = new WP_Query( $args );?>

<!-- LOS PANELES INTERCALADOS - SECCIÓN 3-->
<section>
	<div class="main__seccion2">

<?php // The Loop
if ( $query_custom_post_type_paneles->have_posts() ) {
	while ( $query_custom_post_type_paneles->have_posts() ) {
		$query_custom_post_type_paneles->the_post();
		// do something ?>

		<article class="main__seccion2__articulo">
			<header class="main__seccion2__articulo__header">
				<h2 class="main__seccion2__articulo__header__titulo"><?php the_title();?></h2>
			</header>
			<figure class="main__seccion2__articulo__figure">
				<?php
				if( has_post_thumbnail())
				{
					the_post_thumbnail( 'custom-thumb-600-400' );
				} else { ?>
				;?>
				<img class="main__seccion2__articulo__figure__imagen" src="<?php bloginfo('stylesheet_directory');?>/img/6.jpg" alt="<?php bloginfo('name');?>" />
				<?php };?>
			</figure>
		</article>
	<?php }
} else {
	// no posts found ?>
	<article class="main__seccion2__articulo">
		<header class="main__seccion2__articulo__header">
			<h2 class="main__seccion2__articulo__header__titulo">Lorem ipsum dolor sit amet.</h2>
		</header>
		<figure class="main__seccion2__articulo__figure">
			<img class="main__seccion2__articulo__figure__imagen" src="<?php bloginfo('stylesheet_directory');?>/img/6.jpg" alt="alt" />
		</figure>
	</article>

	<article class="main__seccion2__articulo">
		<header class="main__seccion2__articulo__header">
			<h2 class="main__seccion2__articulo__header__titulo">Lorem ipsum dolor sit amet con.</h2>
		</header>
		<figure class="main__seccion2__articulo__figure">
			<img class="main__seccion2__articulo__figure__imagen" src="<?php bloginfo('stylesheet_directory');?>/img/12.jpg" alt="alt" />
		</figure>
	</article>
<?php };?>

	<!-- FIN DE LOS PANELES INTERCALADOS - SECCIÓN 3-->
	</div>
</section>
<?php // Restore original Post Data
wp_reset_postdata();
?>