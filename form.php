<?php

$nombre = $_POST ['nombre']
$email = $_POST ['email']
$asunto = $_POST['asunto']
$mensaje = $_POST ['mensaje']

//cuerpo de mail de cliente:

$mensaje =  "Enviado por: " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $email . ",\r\n";
$mensaje .= "El asunto es: " . $asunto . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje']

//destino

$destinatario = 'bernardojgonzaleza@gmail.com';
$origen = 'Este email fue enviado desde sitio corporativo de VIPtoria'

//funcion mail

mail($destinatario , $origen, utf8_decode($mensaje), $header)

//redirección al enviar
header('Location:http://127.0.0.1:5500/');

?>