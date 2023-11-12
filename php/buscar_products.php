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
$sql = "SELECT * FROM Productos WHERE Producto LIKE '%$valorBusqueda%'";
$result = $conn->query($sql);

// Mostrar los resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>

        <div class="mdl-card mdl-shadow--2dp full-width product-card">
            <div class="mdl-card__title">
                <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
            </div>
            <div class="mdl-card__supporting-text">
                <small><?php echo $row['Unidades'] ?></small><br>
                <small>Venta: <?php echo $row['Precio_Venta'] ?></small><br>
                <small>Proveedor: <?php echo $row['Precio_Pro'] ?></small>
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <?php echo $row['Producto'] ?>
                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                    <i class="zmdi zmdi-more"></i>
                </button>
            </div>
        </div>
<?php
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>
</div>