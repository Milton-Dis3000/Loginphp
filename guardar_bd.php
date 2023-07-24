<?php
// CONEXION A BD Y MANEJO DE ERRORES

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require("connection.php");
    extract($_POST);

    $query =  "INSERT INTO usuarios (email, password) VALUES('$email', '$contra')";

    $resultado = $mysqli->query($query);

    if ($resultado) {
        // Registro exitoso, redirige a profile.php
        session_start();
        $_SESSION["datos_usuario"] = array("email" => $email); // Aquí puedes almacenar más datos si lo necesitas
        header("Location: login.php");
        exit();
    } else {
        echo "Error al registrar el usuario: " . $mysqli->error;
    }
}
?>