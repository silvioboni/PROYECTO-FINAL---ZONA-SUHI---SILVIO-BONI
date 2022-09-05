<?php

$nombre = $_POST ["name"];
$email = $_POST ["email"];
$telefono = $_POST ["tel"];
$mensaje = $_POST ["mensaje"];
$motivo = $_POST ["motivo"]

$mensaje = "Éste mensaje fue enviado por " . $nombre . ",\r\n"; 
$mensaje = "Su email es " . $email . "\r\n";
$mensaje = "El Asunto es" . $motivo . "\r\n";
$mensaje = "El mensaje es " . $_POST["mensaje"] . "\r\n";
$mensaje = "Enviado el " . date ("d/m/y", time());

$destinatario = "silviodamianboni@yahoo.com.ar";
$asunto = "Este email fue enviado desde el sitio web de Zona-Sushi";

mail($destinatario, $asunto, utf8_decode ($mensaje), $header);

header ("assets/pages/mensajedecontacto.html")