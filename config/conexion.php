<?php
$servidor = "localhost";
$usuario = "antony";
$password = "77021318";
$base_datos = "siadeg";
$port = 3307;

$con = mysqli_connect($servidor, $usuario, $password, $base_datos, $port);
if (!$con) {
    die("Connection fallida: " . mysqli_connect_error());
}