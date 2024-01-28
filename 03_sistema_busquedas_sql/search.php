<?php
require 'connection.php';

$search_term = mysqli_real_escape_string($conn, $_POST['search_term']);

$sql = "SELECT * FROM productos WHERE nombre LIKE '%$search_term%' OR descripcion LIKE '%$search_term%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr> <th>ID</th> <th>Nombre</th> <th>Descripcion</th> <th>Precio</th> <th>Categoria</th> </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td>" . $row['categoria'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados";
}

$conn->close();

?>