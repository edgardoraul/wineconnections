		
	<!-- El Footer -->
	<footer>
		<div class="footer">
			<div class="footer__menu">

				<!-- Parte del logo -->
				<div class="footer__menu__logo">

					<!-- Bloque Logo -->
					<div class="header__logoTexto footer__menu__logo--secundario">
						<?php if ( function_exists( 'the_custom_logo' ) ) {
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							
							if ( has_custom_logo() ) {
								echo '<a href="'.get_bloginfo( 'url' ).'" class="header__logoTexto__enlace">';
								echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
								echo '</a>';
							} else {
								echo '<a href="'.get_bloginfo( 'url' ).'" class="header__logoTexto__enlace">';
								echo get_bloginfo( 'name' );
								echo '</a>';
							}
						};?>
					</div>

					<!-- menu secundario -->
					<?php $menuPrincipal = array(
						'container'			=>	false,
						'depth'				=>	3,
						'menu'				=>	'footer_nav',
						'theme_location'	=>	'footer_nav',
						'items_wrap'		=>	'<ul id="footer_nav" class="footer__menu__logo__lista">%3$s</ul>',
					);
					wp_nav_menu( $menuPrincipal );?>
				</div>

				<!-- contenido secundario -->
				<div class="footer__contenido">

					<!-- contenido -->
					<h3 class="footer__contenido__titulo">
						<?php
							if ( function_exists( 'ot_get_option' ) )
							{
								$titular_o_mensaje_en_el_pie_de_p_gina = ot_get_option('titular_o_mensaje_en_el_pie_de_p_gina', '');
								if($titular_o_mensaje_en_el_pie_de_p_gina != "")
								{
									echo $titular_o_mensaje_en_el_pie_de_p_gina;
								}
								else
								{
									echo "Titular aletaorio.";
								}
							}
						;?>
					</h3>
					<div class="footer__contenido__texto  footer__contenido__texto--destacado">
						<p>
							<?php
							if ( function_exists( 'ot_get_option' ) )
							{
								$p_rrajo_o_lema_para_colocar_en_el_pi__de_la_p_gina_web_ = ot_get_option('p_rrajo_o_lema_para_colocar_en_el_pi__de_la_p_gina_web_', '');
								if($p_rrajo_o_lema_para_colocar_en_el_pi__de_la_p_gina_web_ != "")
								{
									echo $p_rrajo_o_lema_para_colocar_en_el_pi__de_la_p_gina_web_;
								}
								else
								{
									echo "Texto capilla aleatorio.";
								}
							}
							;?>
						</p>
					</div>

					<div class="footer__contenido__texto--copyright">
					<?php
						if ( function_exists( 'ot_get_option' ) )
						{
							$direcci_n_o_ubicaci_n_de_la_empresa = ot_get_option('direcci_n_o_ubicaci_n_de_la_empresa', '');
							if($direcci_n_o_ubicaci_n_de_la_empresa != "")
							{
								echo $direcci_n_o_ubicaci_n_de_la_empresa;
							}
							else
							{
								echo "Texto capilla aleatorio.";
							}
						}
						;?>
					</div>

					<div class="footer__contenido__texto--copyright">
						<p>© <?php echo the_date("Y"); echo " "; bloginfo('name'); _e(' . Todos los derechos reservados.', 'wineconnections');?></p>
						<p>
							<?php _e('Realizado por ', 'wineconnections');?><a href="//globaldevelopment.com.ar" target="_blank" title="Global Development">Global Development</a>
						</p>
					</div>


					<!-- redes sociales -->
					<div class="footer__contenido__sociales">
						<div><strong><?php _e('Decí "hola"', 'wineconnections');?></strong></div>
						<div>info@meloinvento.com</div>
						<a href="#" class="footer__contenido__sociales--enlace"><i class="icomoon icon-facebook"></i></a>
						<a href="#" class="footer__contenido__sociales--enlace"><i class="icomoon icon-twitter"></i></a>
						<a href="#" class="footer__contenido__sociales--enlace"><i class="icomoon icon-whatsapp"></i></a>
						<a href="#" class="footer__contenido__sociales--enlace"><i class="icomoon icon-gmail"></i></a>
						<a href="#" class="footer__contenido__sociales--enlace"><i class="icomoon icon-youtube"></i></a>
					</div>
				</div>

				<!-- botones de acción -->
				<div class="footer__botonera" id="gotop">
					<a href="#" class="footer__botonera__boton footer__botonera__boton--accion">
						Continue building my wine's box
						<i class="icomoon icon-cart"></i>
					</a>
					<a href="#" class="footer__botonera__boton animated">
						<i class="icomoon icon-arrow-up2"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer();?>
</body>
</html>