<?php

//enviar un correo electronico usando PHP y SMTP:

$to = "destinatario@ejemplo.com";
$subject = "Asunto del correo electronico";
$message = "Mensjae del correo electronico";
$headers = "From: remitente@ejemplo.com";

mail($to, $subject, $message, $headers);
?>