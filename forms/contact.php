<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Enviar correo electrónico

$to = 'bernardojgonzaleza@gmail.com';
$subject = 'Consulta de contacto';
$message = "Nombre: $name\nEmail: $email\nAsunto: $subject\nMensaje: $message";

mail($to, $subject, $message);

// Mostrar mensaje de éxito

header('Location: index.php?success=1');

?>
