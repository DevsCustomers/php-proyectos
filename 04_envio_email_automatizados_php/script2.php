<?php
//Script para enviar un correo electronico con formato HTML usando PHP y SMTP:

    $to = "destinatario@ejemplo.com";
    $subject = "Asunto del correo electronico";
    $message = "<html><body><h1>Mensaje del correo electronico</h1> <p>Este es un ejemplo de envio de correo automatizado</p></body></html>";
    $headers = "From: remitente@ejemplo.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);
?>