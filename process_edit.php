<?php
session_start();
$datos = $_SESSION["datos_usuario"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados por el formulario de edición
    $name = $_POST["name"];
    $bio = $_POST["bio"];
    // Actualizar los datos del usuario en la sesión
    $datos["name"] = $name;
    $datos["bio"] = $bio;
    // Puedes agregar más campos aquí

    // Actualizar la sesión con los nuevos datos
    $_SESSION["datos_usuario"] = $datos;

    // Redireccionar a la página de perfil
    header("Location: profile.php");
    exit();
}
