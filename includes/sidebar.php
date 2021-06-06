<?php
// La definición del sidebar.
register_sidebar(
	array(
		'name' => 'Widgets Default',
		'id' => 'widgets-default',
		'description' => 'Área de widgets que aparece en el sidebar por defecto',
		'class' => '',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	)
);
?>