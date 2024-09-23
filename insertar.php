<?php
include 'conexion.php';

// Obtener los valores del formulario
$nombreProd = $_POST['nombreProd'];
$precioProd = $_POST['precioProd'];
$cantidadProd = $_POST['cantidadProd'];

// Insertar el producto en la base de datos
$sql = "INSERT INTO productos (nombreProd, precioProd, cantidadProd) VALUES ('$nombreProd', '$precioProd', '$cantidadProd')";

if ($conn->query($sql) === TRUE) {
    header("Location: ventas.php");  // Redireccionar a la página de ventas
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
