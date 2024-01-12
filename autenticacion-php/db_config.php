<?php
// Cambia los valores segun tu configuracion de bases de datos
$db_host = 'localhost';
$db_user = 'your_username';
$db_pass = 'your_password';
$db_name = 'mydatabase';

// Crear conexion a la base de datos
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Verificar la conexion
if ($db-> connect_error) {
    die('Error de conexion a la base de datos: ' . $db->connect_error);
}

?>