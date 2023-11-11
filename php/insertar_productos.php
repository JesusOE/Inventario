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
    $Producto = $_POST["Producto"];
    $Unidades = $_POST["Unidades"];
    $Precio_Venta = $_POST["Precio_Venta"];
    $Precio_Pro = $_POST["Precio_Pro"];

    // Consulta de inserción
    $sql = "INSERT INTO productos (Producto, Unidades, Precio_Venta, Precio_Pro) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siii", $Producto, $Unidades, $Precio_Venta, $Precio_Pro);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        header('Location: ../home.html');
    } else {
        echo "Error al registrar Producto: " . $stmt->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();
}
?>