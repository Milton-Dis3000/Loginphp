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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/change.css">
    <script src="../main.js" defer></script>
</head>

<body>
    <section id="generalContainer">
        <form action="../handle_db/edit_process.php" method="post" enctype="multipart/form-data">
            <nav>
                <div id="isologotipo">
                    <img src="../img/devchallenges.svg" alt="logo">
                </div>
                <ul>

                    <div id="photoContainer1">
                        <?php
                        if ($userData['photo'] !== null) {
                            $dataImg = base64_encode($userData['photo']);
                            echo "<img src='data:image/jpg;base64, $dataImg' alt='photo'>";
                        } else {
                            echo "<img src='../img/perfilvacio.png' alt='photo'>";
                        }
                        ?>
                        <p><?php echo $userData['name'] ?? ''; ?></p>

                        <div id="toggleIcons">

                        <!-- <i class="fa-solid fa-caret-up"></i> -->
                        <i class="fa-solid fa-sort-down"></i>

                        </div>
                        
                    </div>
                    
                    <div id="toggleBar">

                        <div id="infeText">

                            <div id="profile">
                                <i class="fa-solid fa-circle-user"></i>

                                <a href="profile.php">My profile</a>
                            </div>

                            <div id="chat">
                                <i class="fa-solid fa-user-group"></i>
                                <p>Group chat</p>

                            </div>

                            <hr>
                            <div id="logout">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>

                                <a href="../index.php">Logout</a>

                            </div>
                        </div>

                    </div>


                </ul>


            </nav>


            <div class="backText">
                <a href="profile.php">
                    < Back</a>
            </div>

            <div class="contenedorPrincipal">
                <div id="cuadro">
                    <div class="textSuperior">
                        <h2> Change Info</h2>
                        <p>Changes will be reflected to every services</p>
                    </div>


                    <div class="changePhoto">
                        <label class="change-photo-label" for="img">
                            <?php
                            if ($userData['photo'] !== null) {
                                $dataImg = base64_encode($userData['photo']);
                                echo "<img class='profile-img' src='data:image/jpg;base64, $dataImg'>";
                            } else {
                                echo "<img class='profile-img' src='../img/perfilvacio.png' alt='photo'>";
                            }
                            ?>
                            <h2>CHANGE PHOTO</h2>

                        </label>
                        <input type="file" name="image" id="img">
                    </div>

                    <div class="changeName">
                        <p>Name</p>
                        <input type="text" id="name" name="name" value="<?php isset($userData['name']) ? print($userData['name']) : print('') ?>" placeholder="Enter your name..." />
                    </div>

                    <div class="changeBio">
                        <p>Bio</p>
                        <input type="text" id="bio" name="bio" value="<?php isset($userData['bio']) ? print($userData['bio']) : print('') ?>" placeholder="Enter your bio..." />
                    </div>

                    <div class="changePhone">
                        <p>Phone</p>
                        <input type="text" id="phone" name="phone" value="<?php isset($userData['phone']) ? print($userData['phone']) : print('') ?>" placeholder="Enter your phone..." />
                    </div>

                    <div class="changeEmail">
                        <p>Email</p>
                        <input type="text" id="email" name="email" value="<?php isset($userData['email']) ? print($userData['email']) : print('') ?>" placeholder="Enter your Email..." />
                    </div>

                    <div class="changePhone">
                        <p>Password</p>
                        <input type="text" id="password" name="password" placeholder="Enter your password..." />
                    </div>


                    <div id="saveButton">
                        <button type="submit">Save</button>
                    </div>



                </div>




            </div>

        </form>



    </section>




</body>

</html>