<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBIUV Inicio de sesión</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="styles.css" />
    <!-- Add Poppins font -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Define font-family for elements that should use Poppins */
        body, h1, p, input, button {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

    <div class="title">
        <a href="/">
        <img class="back" src="/assets/icon-arrow-left.png"></a>
        <h1>Iniciar Sesión</h1>
        <div class="divisor"></div>
    </div>
    
    <div class="main">
        <div class="logo-container">
            <div class="logo-wrapper">
                <img class="logouv" src="/assets/logo-uv.png" alt="Logo UV">
                <h1>UBIUV</h1>
            </div>
            
            <form action="/php/login.php" method="POST">
                <div class="input-container">
                    <img class="icon" src="/assets/icon-user.png">
                    <input type="text" id="username" name="username" placeholder="Correo Institucional">
                </div>
                <div class="input-container">
                    <img class="icon" src="/assets/icon-lock.jpg">
                    <input type="password" id="password" name="password" placeholder="Contraseña">
                </div>
                <button id="loginButton" class="button"><p>Iniciar Sesión</p></button>
            </form>
            
            <div class="button-spacing"></div>

            <form action="/php/set-session-guest.php" method="post">
                <button class="button"><p>Modo Invitado</p></button>
            </a>
            
            <?php
            
            if(isset($_SESSION['retry']) && ($_SESSION['retry'] == 'true')) {
                ?>
                <div class="retry">
                    Revisa tus datos e intenta de nuevo
                </div>
            <?php
            }
            ?>

            
        </div>
    </div>
</body>
</html>
