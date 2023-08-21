<?php
session_start();
if (!isset($_SESSION["user_data"])) {
    echo "No estas logueado";
    die();
}

$userData = $_SESSION["user_data"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>

<!--     
    <?php
    var_dump($_SESSION["user_data"]);
    ?> -->


    <main id="interbody">
        <section id="Container">
            <form action="../handle_db/edit_bd.php" method="post" enctype="multipart/form-data">
                <div id="isologotipo">
                    <img src="../img/devchallenges.svg" alt="logo">
                </div>


                <div id="photoContainer1">
                    <?php
                    if (isset($userData['photo']) && $userData['photo'] !== null) {
                        $dataImg = base64_encode($userData['photo']);
                        echo "<img src='data:image/jpg;base64, $dataImg' alt='photo'>";
                    } else {
                        echo "<img src='../img/perfilvacio.png' alt='photo'>";
                    }
                    ?>
                </div>

                <div class="textSuperior">
                    <h2> Personal info</h2>
                    <p>Basic info, like your name and photo</p>
                </div>

                <div id="containerTextProfile">
                    <div id="textProfile">
                        <h2>Profile</h2>
                        <p>Some info may be visible to <br>other people</p>
                    </div>

                    <a href="./edit_profile.php" id="Search">Edit</a>


                </div>


                <div id="photoContainer">
                   
                    <h2>PHOTO</h2>
                        <?php
                        if (isset($userData['photo']) && $userData['photo'] !== null) {
                            $dataImg = base64_encode($userData['photo']);
                            echo "<img src='data:image/jpg;base64, $dataImg' alt='photo'>";
                        } else {
                            echo "<img src='../img/perfilvacio.png' alt='photo'>";
                        }
                        ?>
                
                </div>

                <div id="nameText">
                    <h2>NAME</h2>
                    <p><?php echo $userData['name'] ?? 'null'; ?></p>
                </div>

                <div id="bioText">
                    <h2>BIO</h2>
                    <p><?php echo $userData['bio'] ?? 'null'; ?></p>
                </div>

                <div id="mailText">
                    <h2>EMAIL</h2>
                    <p><?php echo $userData['email']; ?></p>
                </div>

                <div id="passText">
                    <h2>PASSWORD</h2>
                    <p>***********</p>
                </div>

                </div>


            </form>

        </section>

    </main>


</body>

</html>






















<!-- 
<?php
session_start();
$datos = $_SESSION["datos_usuario"];
?>

 -->






<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/profile.css">
</head>

<body>
    <main id="interbody">
        <section id="Container">
            <form action="change.php" method="post" enctype="multipart/form-data">
                <div id="isologotipo">
                    <img src="./img/devchallenges.svg" alt="logo">
                </div>

             
                <div id="photoContainer1">
                    <img src="<?= $datos["ruta_img"] ?>" alt="photo">
                </div>

                <div class="textSuperior">
                    <h2> Personal info</h2>
                    <p>Basic info, like your name and photo</p>
                </div>

                <div id="containerTextProfile">
                    <div id="textProfile">
                        <h2>Profile</h2>
                        <p>Some info may be visible to <br>other people</p>
                    </div>

                    <input id="Search" type="submit" value="Edit" />
                </div>

                <div id="photoContainer">
                    <h2>PHOTO</h2>
                    <img src="<?= $datos["ruta_img"]; ?>" alt="photo">
                </div>

                <div id="nameText">
                    <h2>NAME</h2>
                    <p><?= $datos["name"]; ?></p>
                </div>

                <div id="bioText">
                    <h2>BIO</h2>
                    <p><?= $datos["bio"]; ?></p>
                </div>

                <div id="mailText">
                    <h2>EMAIL</h2>
                    <p><?= $datos["email"]; ?></p>
                </div>

                <div id="passText">
                    <h2>PASSWORD</h2>
                    <p><?= $datos["password"] ?></p>
                </div>

                </div>


            </form>

        </section>

    </main>


</body>

</html> -->