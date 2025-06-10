<?php
$servidor = "localhost";
$usuario = "root";   // Usuario por defecto de XAMPP
$password = "";       // Root en XAMPP normalmente no tiene password
$base_datos = "sistema_db";
$port = 3306;

$con = mysqli_connect($servidor, $usuario, $password, $base_datos, $port);

if (!$con) {
    die("Connection fallida: " . mysqli_connect_error());
}
?>