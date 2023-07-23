<?php
session_start();
$datos = $_SESSION["datos_usuario"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/change.css">
</head>

<body>
    <section id="generalContainer">
        <form action="change.php" method="post" enctype="multipart/form-data">
            <nav>
                <div id="isologotipo">
                    <img src="./img/devchallenges.svg" alt="logo">
                </div>

                
                <div id="toggleBar">
                    <div id="photoContainer1">
                        <img src="img/perfil.jpg" alt="photo">
                        <p>Xantle Neal</p>
                        <img id="Icons" src="img/flechclip.svg" alt="Iconflecha">
                    </div>
                    <div id="infeText">

                        <div id="profile">
                            <i class="fa-solid fa-circle-user"></i>
                            <p>My profile</p>
                        </div>

                        <div id="chat">
                            <i class="fa-solid fa-user-group"></i>
                            <p>Group chat</p>

                        </div>

                        <hr>
                        <div id="logout">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <p>Logout</p>
                        </div>
                    </div>

                    <!-- <a href="logout.php"></a> -->

                </div>


            </nav>


            <div class="backText">
                <button>
                    < Back</button>

            </div>

            <div class="contenedorPrincipal">
                <div id="cuadro">
                    <div class="textSuperior">
                        <h2> Change Info</h2>
                        <p>Changes will be reflected to every services</p>
                    </div>

                    <div id="photoContainer">
                        <img src="img/perfil.jpg" alt="photo">
                        <h2>CHANGE PHOTO</h2>
                    </div>

                    <div class="changeName">
                        <p>Name</p>
                        <input type="name" id="name" name="changeName" placeholder="Enter your name..." />
                    </div>

                    <div class="changeBio">
                        <p>Bio</p>
                        <input type="bio" id="bio" name="changeBio" placeholder="Enter your bio..." />
                    </div>

                    <div class="changePhone">
                        <p>Phone</p>
                        <input type="phone" id="phone" name="changePhone" placeholder="Enter your phone..." />
                    </div>

                    <div class="changeEmail">
                        <p>Email</p>
                        <input type="email" id="email" name="changeEmail" placeholder="Enter your Email..." />
                    </div>

                    <div class="changePhone">
                        <p>Password</p>
                        <input type="password" id="password" name="changePassword" placeholder="Enter your password..." />
                    </div>

                
                    <div id="saveButton">
                        <button>Save</button>
                    </div>



                </div>




            </div>

        </form>



    </section>




</body>

</html>