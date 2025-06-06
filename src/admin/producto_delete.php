<?php

include_once __DIR__ . '/../../config/conexion.php';

$id = $_GET['id'] ?? null;

$sql = "DELETE FROM productos WHERE id = " . $id . "";

if (mysqli_query($con, $sql)) {
    header("Location: productos.php");
    exit;
} else {
    echo "Error al eliminar el producto: " . mysqli_error($con);
}