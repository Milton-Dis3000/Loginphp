<?php
session_start();
$datos = $_SESSION["datos_usuario"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
    <main id="interbody">
        <section id="Container">
            <form action="" method="post" enctype="multipart/form-data">
                <div id="isologotipo">
                    <img src="../img/devchallenges.svg" alt="logo">
                </div>

                <div id="photoContainer1">
                    <img src="<?= $datos["ruta_img"] ?>" alt="photo">
                </div>

                <div class="textSuperior">
                    <h2>Edit Personal info</h2>
                    <p>Edit your basic info</p>
                </div>

                <div id="containerTextProfile">
                    <div id="textProfile">
                        <h2>Profile</h2>
                        <p>Some info may be visible to <br>other people</p>
                    </div>

                    <input id="Search" type="submit" value="Save" />
                </div>

                <div id="photoContainer">
                    <h2>PHOTO</h2>
                    <img src="<?= $datos["ruta_img"]; ?>" alt="photo">
                </div>

                <div id="nameText">
                    <h2>NAME</h2>
                    <input type="text" name="name" value="<?= $datos["name"]; ?>">
                </div>

                <div id="bioText">
                    <h2>BIO</h2>
                    <textarea name="bio"><?= $datos["bio"]; ?></textarea>
                </div>

                <div id="mailText">
                    <h2>EMAIL</h2>
                    <p><?= $datos["email"]; ?></p>
                </div>

                <div id="passText">
                    <h2>PASSWORD</h2>
                    <p><?= $datos["password"] ?></p>
                </div>
            </form>
        </section>
    </main>
</body>

</html>