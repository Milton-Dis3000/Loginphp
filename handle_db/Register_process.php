<?php
if($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"]!== ""&&$_POST["contra"] !==""){
$correo = $_POST["email"];
$contrasena = $_POST["contra"];

try{
    //TRAIGO LA CONEXIÓN
    require_once("../connection.php");

    //ENCRIPTO LA CONTRASEÑA
    $hash = password_hash($contrasena, PASSWORD_DEFAULT);
   
    
    $result = $mysqli->query("INSERT INTO usuarios(email, password) VALUES ('$correo', '$hash');");
    
    //TRAER LOS DATOS PARA LOGGEAR AL USUARIO AUTOMATICAMENTE
    if($result){
        $stmt = $mysqli->query("SELECT * FROM usuarios WHERE email = '$correo'");
        if($stmt->num_rows === 1){
            $data = $stmt->fetch_assoc();

            session_start();
            $_SESSION["user_data"] = $data;

            header("location: ../wiev/profile.php");

        }
    }


}catch(mysqli_sql_exception $e){
    echo "Error:" . $e->getMessage();
}
}else{
    echo "No estas accediendo por POST";
}



