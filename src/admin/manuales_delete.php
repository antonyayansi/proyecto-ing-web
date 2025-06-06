<?php

include_once __DIR__ . '/../../config/conexion.php';

$id = $_GET['id'] ?? null;

$sql = "DELETE FROM manuales WHERE id = " . $id . "";

if (mysqli_query($con, $sql)) {
    header("Location: manuales.php");
    exit;
} else {
    echo "Error al eliminar el manual: " . mysqli_error($con);
}