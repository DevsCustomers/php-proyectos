<?php
//Verificar si el carrito existe en la sesion
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

//Mostrar los productos en el carrito
$total = 0;
foreach ($_SESSION['carrito'] as $producto) {
    echo $producto['nombre'] . " - $" . $producto['precio'] . "<br>";
    $total += $producto['precio'];
}

echo "Total: $" . $total;

?>