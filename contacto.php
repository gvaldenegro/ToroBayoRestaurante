<?php
	$to = "contacto@torobayoresturante.cl";
	$name = $_REQUEST['nombre'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['telefono'];
	$message = $_REQUEST['mensaje'];
	$headers = "From: Contacto <contacto@torobayoresturante.cl>"."\r\n".
		"Reply-To: $email";

	$name = isset($name) ? "Nombre: $name"."\r\n" : "";
	$email = isset($email) ? "Email: $email"."\r\n" : "";
	$phone = isset($phone) ? "Telefono: $phone"."\r\n" : "";
	$message = isset($message) ? "Mensaje: $message"."\r\n" : "";

	$content = "$name $email $phone $message";

	mail($to, "Correo enviado por la página web", $content, $headers);
?>