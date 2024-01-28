<?php
require_once 'db_config.php';

function get_user_permissions($role_id) {
    global $db; // Asegurarse de estar utilizando la conexion a la base de datos global

    // Consulta la base de datos para obtener los permisos de rol
    $query = "SELECT p.permission_name
              FROM role_permissions rp
              INNER JOIN permissions p ON rp.permission_id = p.permission_id
              WHERE rp.role_id = ?";

// Preparar y ejecutar la consulta
if ($stmt = $db -> prepare($query)) {
    $stmt -> bind_param("i", $role_id);
    $stmt -> execute();
}
   // Almacenar los resultados en un array
    $result = $stmt -> get_result();
    $permissions = array();

    while ($row = $result->fetch_assoc()) {
        $permissions[] = $row['permission_name'];
    }

// Cerrar la declaracion
    $stmt->close();
    # code...
}{
    // Mostrar un mensaje de error si la consulta falla
    echo "Error al consultar los permisos: " . $db->error;
}
?>