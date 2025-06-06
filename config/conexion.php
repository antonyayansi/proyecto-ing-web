<?php
$servidor = "localhost";
$usuario = "antony";   // Usuario por defecto de XAMPP
$password = "77021318";       // Root en XAMPP normalmente no tiene password
$base_datos = "siadeg";
$port = 3307;

$con = mysqli_connect($servidor, $usuario, $password, $base_datos, $port);

if (!$con) {
    die("Connection fallida: " . mysqli_connect_error());
}
?>