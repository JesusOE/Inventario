<?php

function obtenerCantidadClientes() {

    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "SELECT COUNT(*) as total FROM clientes";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return 0;
    }
}

function obtenerCantidadProveedores() {

    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "SELECT COUNT(*) as total FROM proveedor";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return 0;
    }
}

function obtenerCantidadProductos() {

    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "SELECT COUNT(*) as total FROM productos";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return 0;
    }
}

function obtenerCantidadVentas() {

    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "SELECT COUNT(*) as total FROM ventas";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return 0;
    }
}

function obtenerCantidadUsuarios() {

    $conn = new mysqli("localhost", "root", "", "inventario");
    $sql = "SELECT COUNT(*) as total FROM usuarios";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return 0;
    }
}
?>