<?php
include 'conexion.php';

// Obtener el ID del producto a eliminar
$idProd = $_POST['idProd'];

// Eliminar el producto de la base de datos
$sql = "DELETE FROM productos WHERE idProd='$idProd'";

if ($conn->query($sql) === TRUE) {
    header("Location: ventas.php");  // Redireccionar a la página de ventas
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
