<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inventario";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

   // Datos a insertar
    $Id_Produ = $_POST["Id_Produ"];
    $Producto = $_POST["Producto"];
    $Cantidad = $_POST["Cantidad"];
    $Precio = $_POST["Precio"];
    $Total = $_POST["Total"];
    $Descuento = $_POST["Descuento"];

    // Consulta de inserción
    $sql = "INSERT INTO ventas (Id_Produ, Producto, Cantidad, Precio, Total, Descuento) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issisi", $Id_Produ, $Producto, $Cantidad, $Precio, $Total, $Descuento);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        header('Location: ../home.php');
    } else {
        echo "Error al registrar venta: " . $stmt->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();
    }
?>