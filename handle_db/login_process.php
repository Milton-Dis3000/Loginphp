<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["contra"] !== "") {
    $correo = $_POST["email"];
    $contrasena = $_POST["contra"];

    try {

        require_once("../connection.php");

        $statement = $mysqli->query("SELECT * FROM usuarios WHERE email='$correo';");

        if ($statement->num_rows === 1) {
            $data = $statement->fetch_assoc();

            $hash = $data["password"];

            $verify = password_verify($contrasena, $hash);

            if ($verify) {
                session_start();
                $_SESSION["user_data"] = $data;

                header("location: ../wiev/profile.php");
            } else {
                echo "Las credenciales no coinciden";
            }
        } else {
            echo "Las credenciales no coinciden";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error:" . $e->getMessage();
    }
} else {
    echo "No se cumplen las condiciones para la colaboracion de los datos de inicio de sesión";
}
