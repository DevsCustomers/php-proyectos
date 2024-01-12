<?php
session_start();
require_once "functions.php";

// Comprobar si el usuario ha iniciado sesion
if (!isset( $_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

// Obtener los permisos del usuario
$permissions = get_user_permissions($_SESSION["role_id"]);

// Verificar si el usuario tiene el permiso necesario
if (in_array("view_profile", $permission)) {
    // Mostrar el contenido del perfil
} else {
    // Mostrar un mensaje de error o redirigir a otra pagina
}

// Destruir la sesion
session_destroy();

// Redirigir al usuario al formulario de inicio de seccion
header("location: index.php");
exit;

?>