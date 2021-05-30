<?php get_header();


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
$query_custom_post_type_principales = new WP_Query( $args );?>

<!-- LAS SECCIONES PRINCIPALES -->
<section>
	<div class="main__seccion1 izquierda">

<?php // The Loop
if ( $query_custom_post_type_principales->have_posts() ) {
	while ( $query_custom_post_type_principales->have_posts() ) {
		$query_custom_post_type_principales->the_post();
		// do something ?>
	<article class="main__seccion1__articulo" id="<?php echo 'seccion-principal-'.get_the_ID();?>" name="<?php echo 'seccion-principal-'.get_the_ID();?>">
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
				<a href="#2" class="boton">Get Journeys<i class="separador"> </i>
				<i class="icomoon icon-forward"> </i></a>
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
				<a href="#2" class="boton">
					Get Journeys
					<i class="separador"></i>
					<i class="icomoon icon-forward"></i>
				</a>
			</div>
		</div>
	</article>


<?php };?>

	</div>
</section>
<!-- FIN DE las secciones principales -->


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

get_footer();
?>