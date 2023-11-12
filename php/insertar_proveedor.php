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
    $Nombre = $_POST["Nombre"];
    $Dirección = $_POST["Dirección"];
    $Teléfono = $_POST["Teléfono"];

    // Consulta de inserción
    $sql = "INSERT INTO proveedor (Nombre, Direccion, Telefono) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $Nombre, $Dirección, $Teléfono);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        header('Location: ../home.php');
    } else {
        echo "Error al registrar proveedor: " . $stmt->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();
    }
?>