

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
    <title>Register</title>
</head>

<body>
    
    <main id="interbody">
        <section id="Container">

            <div id="isologotipo">
                <img src="./img/devchallenges.svg" alt="logo">
            </div>

            <div class="textSuperior">
                <h2> Join thousands of learners from around the world</h2>
                <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
            </div>

            <div class="inputRegister">
                <form action="guardar_bd.php" method="post" enctype="multipart/form-data">
                    <!-- <label for="img"> Subir Imagen:</label>
                    <br>
                    <input type="file" id="img" name="imagen">
                    <br> -->
                    
                    <div class="input-container">
                        <label for="correo"></label>
                        <input type="email" id="correo" name="email" placeholder="Email" />
                        <i class="fas fa-envelope"></i>
                    </div>

                    <!-- <div>
                        <img src="img_subidas/perfil.jpg" alt="">
                    </div> -->

                    <div class="input-container">
                        <label for="contra"></label>
                        <input type="password" id="contra" name="contra" placeholder="Password" />
                        <i class="fas fa-unlock"></i>
                    </div>
                    <input id="Search" type="submit" value="Start coding now" />
                </form>

            </div>
            <div class="footerLogin">
                <p>or continue with these social profile</p>
                <div id="socialIcons">
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-github"></i>

                </div>

                <form action="login.php" method="post">
                    <div id="loginMember">
                        <p>Adready a member?</p>
                        <button>Login</button>-
                    </div>
                </form>





            </div>




        </section>

    </main>

   <?php
   session_start();
   if (isset($_SESSION ["error_tipo"])) {
    print_r("<p>". $_SESSION['error_tipo']."</>");
   }
   unset($_SESSION["error_tipo"]);
   ?>
  



</body>

</html>