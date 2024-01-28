<?php
session_start();
include 'productos.php';

// Verificar si el carrito ya existe en la sesion
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Obtener el ID del producto que se esta agregando al carrito
$idProducto = $_POST['id'];

// Buscar el producto en el arreglo de productos disponibles
foreach ($productos as $producto) {
    if ($producto['id'] == $idProducto) {
        // Agregar el producto al carrito
        $_SESSION['carrito'][] = $producto;
        break;
    }
}
?>