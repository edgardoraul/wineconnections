<?php
// Modificar los campos del perfil de usuario de WordPress
function extra_contact_info($contactmethods)
{
	unset($contactmethods['aim']);
	unset($contactmethods['yim']);
	unset($contactmethods['jabber']);
	unset($contactmethods['nicename']);
	$contactmethods['facebook']='Facebook';
	$contactmethods['twitter']='Twitter';
	$contactmethods['skype_contacto']='Skype/Outlook/Hotmail';
	return $contactmethods;
};
add_filter( 'user_contactmethods', 'extra_contact_info' );
?>