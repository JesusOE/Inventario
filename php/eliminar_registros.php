<?php

function borrarClientePorId($idCliente) {
    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "DELETE FROM clientes WHERE Id_Cliente = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idCliente);

    return $stmt->execute();
}

function borrarProveedorPorId($idProveedor) {
    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "DELETE FROM proveedor WHERE Id_Prove = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idProveedor);

    return $stmt->execute();
}

function borrarProductoPorId($idProducto) {
    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "DELETE FROM productos WHERE Id_Produ = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idProducto);

    return $stmt->execute();
}

function borrarVentaPorId($idVenta) {
    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "DELETE FROM ventas WHERE Id_Venta = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idVenta);

    return $stmt->execute();
}

function borrarUsuarioPorId($idVenta) {
    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "DELETE FROM usuarios WHERE Id_Usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idVenta);

    return $stmt->execute();
}
?>