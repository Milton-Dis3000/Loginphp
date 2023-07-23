<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>
    <main id="interbody">
        <section id="Container">

            <div id="isologotipo">
                <img src="./img/devchallenges.svg" alt="logo">
            </div>

            <div class="textSuperior">
                <h2>Login</h2>
            </div>

            <div class="inputRegister">
                <form action="profile.php" method="post">
                    <div class="input-container">
                        <label for="correo"></label>
                        <input type="email" id="correo" name="email" placeholder="Email" />
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div class="input-container">
                        <label for="contra"></label>
                        <input type="password" id="contra" name="contra" placeholder="Password" />
                        <i class="fas fa-unlock"></i>
                    </div>

                    <input id="Search" type="submit" value="Login" />
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
                    <p>Don’t have an account yet?</p>
                    <button >Register</button>
                </div>
                </form>
             
            </div>




        </section>

    </main>





</body>

</html>