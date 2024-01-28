<?php

//Script para automatizar el envio de correos electonicos utilizando una base de datos y PHP:

// Conectarse a la base de datos
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Seleccionar destinatarios de la base de datos
$query = "SELECT email FROM destinatarios";
$result = mysqli_query($conn, $query);

// Enviar correos electronicos a cada destinatario
while ($row = mysqli_fetch_assoc($result)) {
    $to = "destinatario@ejemplo.com";
    $subject = "Asunto del correo electronico";
    $message = "<html><body><h1>Mensaje del correo electronico</h1> <p>Este es un ejemplo de envio de correo automatizado</p></body></html>";
    $headers = "From: remitente@ejemplo.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);
}

// Cerrar conexion con la base de datos
mysqli_close($conn);
?>

