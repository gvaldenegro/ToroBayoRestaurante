<?php
	// $to = "sortega@ideatres.cl";
	$to = "contacto@torobayoresturante.cl";
	$name = $_REQUEST['nombre'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['telefono'];
	$people = $_REQUEST['personas'];
	$date = $_REQUEST['fecha'];
	$time = $_REQUEST['hora'];
	$message = $_REQUEST['mensaje'];
	$headers = "From: Contacto <contacto@torobayoresturante.cl>"."\r\n".
		"Reply-To: $email";

	$name = isset($name) ? "Nombre: $name"."\r\n" : "";
	$email = isset($email) ? "Email: $email"."\r\n" : "";
	$phone = isset($phone) ? "Telefono: $phone"."\r\n" : "";
	$people = isset($people) ? "Personas: $people"."\r\n" : "";
	$date = isset($date) ? "Fecha: $date"."\r\n" : "";
	$time = isset($time) ? "Hora: $time"."\r\n" : "";
	$message = isset($message) ? "Mensaje: $message"."\r\n" : "";

	$content = "$name $email $phone $people $date $time $message";

	mail($to, "Reserva realizada por la pagina web", $content, $headers);
?>