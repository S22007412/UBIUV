<?php
    session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no">
    <title>Edificio <A></A></title>
    <!-- Add Poppins font -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Define font-family for elements that should use Poppins */
        body, h1, button {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <div class="main">
        <!--
        <div class="logoubiuv">
            <img class="logouv" src="Logo UV.png" alt="Logo UV">
            <div class="ubiuv">
            <h2>UBIUV</h2>
            </div>
        </div>      
        -->

        <div class="linea"></div>
        <div class="edificio">
            <div class="texto">
                <div class="miu"><h2>Salón A-15</h2></div>
            </div>
        </div>
        
        <div class="fiec">
            <img class="facultad" src="" alt="FIEC">
        </div>
        <div class="botones">
            <div class="info">
                <h1>
                    Información
                </h1>
                <h3>
                    texto
                    <?php
                        $id_edificio = '1';
                        $id_salon = '1';

                        include '../../../../php/salon-info.php'; 
                    ?>
                </h3>
            </div>
            <?php if(isset($_SESSION['session_type']) && ($_SESSION['session_type'] == 'admin' || $_SESSION['session_type'] == 'student')) { ?>
                <div class="modificar">
                    <button>
                        Admin y estudiante
                    </button>
                </div>
            <?php } ?>

            <?php
            
            if(isset($_SESSION['session_type']) && $_SESSION['session_type'] == 'admin') {
                ?>
                <div class="modificar">
                    <button>
                        Admin
                    </button>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="linea"></div>
        <!-- 
        <div class="navigation">
            <button><img class="homeicon" src="home icon.jpeg" alt="home icon"></button>
            <button><img class="gomapicon" src="gomap icon.jpeg" alt="go map icon"></button>
            <button><img class="optionsicon" src="options icon.jpeg" alt="three lines"></button>
        </div> -->
    </div>
</body>
