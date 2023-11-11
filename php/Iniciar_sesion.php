<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'inventario');

// Verificación de errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$Nombre = $_POST['Nombre'];
$Contraseña = $_POST['Contraseña'];

// Consulta para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE Nombre='$Nombre' AND Contraseña='$Contraseña'";
$result = $conn->query($sql);

// Verificar si se encontró un usuario
if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['Nombre'] = $Nombre;
    header('Location: ../home.html'); // Redirigir a la página de inicio después del inicio de sesión
} else {
    // Inicio de sesión fallido
    header('Location: ../index.html');
}

// Cerrar la conexión
$conn->close();
?>