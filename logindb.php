<?php

require("connection.php");

$correo = $_POST["email"];
$contrasena = $_POST["contra"];

// Escapar caracteres especiales para prevenir inyección SQL
$correo = $mysqli->real_escape_string($correo);
$contrasena = $mysqli->real_escape_string($contrasena);

$query = "SELECT * FROM usuarios WHERE email = '$correo' AND password = '$contrasena'";
$resultado = $mysqli->query($query);

if ($resultado && $resultado->num_rows === 1) {
    header("Location: profile.php");
} else {
    header("Location: login.php");
}