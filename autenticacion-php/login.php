<?php
// Recuperar los datos del formulario
$username = $_POST["username"];
$password = $_POST["password"];

// Consultar la base de datos para verificar el usuario y la contrasena
// ...

// Verificar si la contrasena es Correcta
if (hash("sha256", $password) == $encryptedPasswordFromDB) {
    // Iniciar sesion
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["role_id"] = $role_id_from_database;

    //Redirigir al usuario a la pagina protegida
    header("location: protected.php");
    exit;
} else {
    // Mostrar un mensaje de error
    echo "Nombre de usuario o contrasena incorrecta.";
}
?>