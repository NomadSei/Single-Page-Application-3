<?php
$servername = "localhost";   // Servidor de la base de datos
$username = "root";          // Usuario de MySQL (por defecto root en XAMPP)
$password = "";              // Contraseña (por defecto en blanco)
$dbname = "inventario";      // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa!";
}
?>
