<?php
// logout.php

// Inicia o reanuda la sesión
session_start();

// Destruye la sesión para cerrar sesión
session_destroy();

// Redirige al usuario a la página de inicio de sesión o a cualquier otra página después de cerrar sesión
header("Location: login.php");
exit();
?>