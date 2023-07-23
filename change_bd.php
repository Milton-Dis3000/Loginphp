<?php
//CONEXION A BD Y MANEJO DE ERRORES


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require("connection.php");

    extract($_POST);
    // echo $email;
    // echo $contra;

    // var_dump($_FILES);   
    $temporal = $_FILES["imagen"]["tmp_name"];

    $rutaCompleta = "img_subidas/" . $_FILES["imagen"]["name"];

    move_uploaded_file($temporal, $rutaCompleta);

    $query =  "INSERT INTO usuarios (email, password, ruta_img) VALUES('$email', '$contra', '$rutaCompleta')";

    $resultado = $mysqli->query($query);

    if ($resultado) {
        $email = $mysqli->real_escape_string($email);
    
        $query = "SELECT * FROM usuarios WHERE email='$email'";
        $usuarioDB = $mysqli->query($query);
    
        if ($usuarioDB->num_rows === 1) {
            $data = $usuarioDB->fetch_assoc();
            session_start();
            $_SESSION["datos_usuario"] = $data;
            header("Location: profile.php");
            exit();
        } else {
            echo "El usuario no existe.";
        }
    } else {
        echo "Error en el resultado";
    }
   
}
