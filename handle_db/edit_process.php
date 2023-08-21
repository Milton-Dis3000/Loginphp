<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST) {
    require_once("../connection.php");
    session_start();

    $idUser = $_SESSION["user_data"]["id"];

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {
        $dataImg = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $mysqli->query("UPDATE usuarios SET photo='$dataImg' WHERE id=$idUser");
    }

    if (isset($_POST["name"]) && $_POST["name"] !== "") {
        $name = $_POST["name"];
        $mysqli->query("UPDATE usuarios SET name='$name' WHERE id=$idUser");
    }

    if (isset($_POST["bio"]) && $_POST["bio"] !== "") {
        $bio = $_POST["bio"];
        $mysqli->query("UPDATE usuarios SET bio='$bio' WHERE id=$idUser");
    }

    if (isset($_POST["phone"]) && $_POST["phone"] !== "") {
        $phone = $_POST["phone"];
        $mysqli->query("UPDATE usuarios SET phone='$phone' WHERE id=$idUser");
    }

    if (isset($_POST["email"]) && $_POST["email"] !== "") {
        $email = $_POST["email"];
        $mysqli->query("UPDATE usuarios SET email='$email' WHERE id=$idUser");
    }

    if (isset($_POST["password"]) && $_POST["password"] !== "") {
        $password = $_POST["password"];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $mysqli->query("UPDATE usuarios SET password='$hashedPassword' WHERE id=$idUser");
    }

    $stmt = $mysqli->query("SELECT * FROM usuarios WHERE id='$idUser';");
    if ($stmt->num_rows === 1) {
        $_SESSION["user_data"] = $stmt->fetch_assoc();
    }

    header("Location: ../wiev/profile.php");
} else {
    echo "No se agregaron los datos correctamente";
}
