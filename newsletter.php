<?php
	// $to = "sortega@ideatres.cl";
	$to = "contacto@torobayoresturante.cl";
	$email = $_REQUEST['email'];
	$headers = "From: Contacto <contacto@torobayoresturante.cl>"."\r\n".
		"Reply-To: $email";

	$email = isset($email) ? "$email" : "";

	$content = "El correo $email se ha suscrito al newsletter";

	mail($to, "Subscripcion al newsletter ", $content, $headers);
?>