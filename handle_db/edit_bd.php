<?php
// CONEXIÓN A BD Y MANEJO DE ERRORES

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require("../connection.php");

    // Recuperar datos del formulario
    extract($_POST);
    $temporal = $_FILES["imagen"]["tmp_name"];
    $rutaCompleta = "img_subidas/" . $_FILES["imagen"]["name"];
    move_uploaded_file($temporal, $rutaCompleta);

    // Consulta SQL para insertar el nuevo usuario en la tabla
    $query = "INSERT INTO usuarios (name, bio, phone, email, password, ruta_img) VALUES ('$changeName', '$changeBio', '$changePhone', '$changeEmail', '$changePassword', '$rutaCompleta')";
    $resultado = $mysqli->query($query);

    if ($resultado) {
        
        // Si el usuario fue insertado exitosamente, realizar una consulta adicional para recuperar los datos
        $query = "SELECT * FROM usuarios WHERE email='$changeEmail'";
        $usuarioDB = $mysqli->query($query);

        $query = "SELECT * FROM usuarios WHERE password='$changePassword'";
        $usuarioDB = $mysqli->query($query);

        $query = "SELECT * FROM usuarios WHERE name='$changeName'";
        $usuarioDB = $mysqli->query($query);

       

        if ($usuarioDB->num_rows === 1) {
            // Si se encontró el usuario en la base de datos, almacenar los datos en la sesión
            $data = $usuarioDB->fetch_assoc();
            session_start();
            $_SESSION["datos_usuario"] = $data;
            header("Location: ../wiev/profile.php");
            exit();
        } else {
            echo "El usuario no existe.";
        }
    } else {
        echo "Error en el resultado";
    }
}
?> 