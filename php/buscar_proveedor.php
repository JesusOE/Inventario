<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el valor de búsqueda desde la solicitud AJAX
$valorBusqueda = $_POST['valor'];

// Consulta para buscar productos en la base de datos
$sql = "SELECT * FROM proveedor WHERE Nombre LIKE '%$valorBusqueda%'";
$result = $conn->query($sql);

// Mostrar los resultados
if ($result->num_rows > 0) {
?>
    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Id_Prove</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">
                    <?php echo $row['Id_Prove'] ?>
                </td>
                <td>
                    <?php echo $row['Nombre'] ?>
                </td>
                <td>
                    <?php echo $row['Direccion'] ?>
                </td>
                <td>
                    <?php echo $row['Telefono'] ?>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "No se encontraron resultados.";
            }

            // Cerrar la conexión
            $conn->close();
    ?>
        </table>
    </div>