






<!-- <?php

require("../connection.php");

$correo = $_POST["email"];
$contrasena = $_POST["contra"];

$query = "SELECT * FROM usuarios WHERE email = '$correo' AND password = '$contrasena'";
$resultado = $mysqli->query($query);

if ($resultado && $resultado->num_rows === 1) {
    header("Location: ../wiev/profile.php");
} else {
    header("Location: ../wiev/login.php");
}  