<?php
// Registramos dos sidebars para añadir widgets
add_action( 'widgets_init', 'theme_slug_widgets_init' );

function theme_slug_widgets_init()
{
	register_sidebar( array(
		'name' => __( 'Sidebar blog', 'wineconnections' ),
		'id' => 'blog-sidebar-right',
		'class' => 'sidebar-blog',
		'before_widget' => '<div class="nuestra-clase">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __( 'Footer izquierda', 'wineconnections' ),
		'id' => 'footer-sidebar-left',
		'class' => 'sidebar-blog',
		'before_widget' => '<div class="nuestra-clase">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	 ));
}
?>