<?php

$name = $_POST['nombre'];
$email = $_POST['email'];
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];

// Enviar correo electrónico

$to = 'bernardojgonzaleza@gmail.com';
$subject = 'Consulta de contacto a VIPtoria';
$message = "Nombre: $name\nEmail: $email\nAsunto: $subject\nMensaje: $message";

mail($to, $subject, $message);

// Mostrar mensaje de éxito

header('Location: index.php?success=1');

?>
