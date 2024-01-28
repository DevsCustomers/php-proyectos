<?php
// Validacion del tamano del archivo
if ($_FILES["image"]["size"] > 2097152) {
    echo "El tamano de la imagen es demasiado grande. El tamano maximo permitido es 2 MB.";
    exit;
}

// Validacion del tipo de archivo
$allowedTypes = array("image/jpeg", "image/jpg", "image/png");
if (!in_array($_FILES["image"]["type"], $allowedTypes)) {
    echo "Solo se permiten imagenes JPG, JPEG, y PNG.";
    exit;
}

// Carga de la imagen
$targetDir = "images/";
$targetFile = $targetDir . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    echo "La imagen ha sido cargando correctamente.";
} else {
    echo "Ha ocurrido un error al cargar la imagen.";
}

?>