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
    $Teléfono = $_POST["Teléfono"];
    $Dirección = $_POST["Dirección"];
    $Contraseña = password_hash($_POST["Contraseña"], PASSWORD_DEFAULT);

    // Consulta de inserción
    $sql = "INSERT INTO usuarios (Nombre, Telefono, Direccion, Contraseña) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siss", $Nombre, $Teléfono, $Dirección, $Contraseña);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        header('Location: ../home.html');
    } else {
        echo "Error al insertar datos: " . $stmt->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();
}
?>