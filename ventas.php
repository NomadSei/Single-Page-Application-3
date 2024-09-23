<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Inventario de Productos</h1>
    
    <!-- Formulario para registrar productos -->
    <form id="registroForm" action="insertar.php" method="POST">
        <label for="nombreProd">Nombre del Producto:</label>
        <input type="text" id="nombreProd" name="nombreProd" required><br><br>

        <label for="precioProd">Precio:</label>
        <input type="number" id="precioProd" name="precioProd" step="0.01" required><br><br>

        <label for="cantidadProd">Cantidad:</label>
        <input type="number" id="cantidadProd" name="cantidadProd" required><br><br>

        <button type="submit">Registrar Producto</button>
    </form>

    <!-- Formulario para eliminar productos -->
    <form id="eliminarForm" action="eliminar.php" method="POST">
        <label for="idProd">ID del Producto a Eliminar:</label>
        <input type="number" id="idProd" name="idProd" required><br><br>

        <button type="submit">Eliminar Producto</button>
    </form>

    <!-- Lista de productos -->
    <h2>Lista de Productos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        <?php
        // Conexión a la base de datos
        include 'conexion.php';
        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);
        
        // Mostrar los productos en la tabla
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["idProd"]. "</td><td>" . $row["nombreProd"]. "</td><td>" . $row["precioProd"]. "</td><td>" . $row["cantidadProd"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay productos registrados</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
