<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); // Start the session

// Define the relative path to the target directory
$relative_target_dir = "/assets/";
$absolute_target_dir = "/var/www/html/assets/";

// Define the path to the JSON file that stores the image paths
$json_file_path = '/var/www/html/config/image_paths.json';

// The tag for this specific page
$page_tag = 'edificio-a';

// Include the image upload logic
include '/var/www/html/php/image-upload.php';

// If no upload, read the current image path from the JSON file
$image_paths = read_image_paths($json_file_path);
$relative_target_file = isset($image_paths[$page_tag]) ? $image_paths[$page_tag] : $relative_target_dir . "fiec.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no">
    <title>Edificio A<A></A></title>
    <!-- Add Poppins font -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Define font-family for elements that should use Poppins */
        body, h1, button, input, textarea{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <div class="navbar-fixed-top">
        <div class="back-arrow">
            <a href="/pages/main/interactive-map/index.html">
                <img class="arrow-img" src="../../assets/icon-arrow-left.png">
            </a>
        </div>        
        <div class="logo-container">
            <div class="part1">
                <img class="logouv" src="../../assets/logo-uv.png" alt="Logo UV">
            </div>
            <div class="part2">
                <h1>UBIUV</h1>  
            </div>
        </div>
        <div class="header-separator"></div>
    </div>

    
    <div class="main">
        <!-- Building Tittle -->
        <div class="edificio">
            <button class="button-page">Edificio A</button>
        </div>
        
 

        <div class="slider">
            <div class="slides">
                <div class="slide" id="slide-1">
                    <div class="slider-container">
                        <div class="slide-header">
                            <button class="nav prev">‹</button>
                            <span class="nav-text">Historia</span>
                            <button class="nav next">›</button>
                        </div>
                        <div class="pagination">
                            <span class="dot active"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                    <div class="slide-content">
                            <!-- Building Image -->
                            <div class="test">
                        <div class="edificio">
                            <!-- Use the relative path for the img src attribute -->
                            <!-- <img class="edificio-img" src="<?php echo htmlspecialchars($relative_target_file); ?>" alt="Edificio A"> -->
                            <img class="edificio-img" src="../../assets/edificios/edificio-a.png" alt="Edificio A">
                        </div>
                        
                        <?php if (isset($_SESSION['session_type']) && $_SESSION['session_type'] == 'admin') { ?>
                            
                            <!-- Show the modify button -->
                            <div class="modify-container">
                            <button class="modify-button button-modify" id="modifyButton">Modificar</button>
                            
                            <!-- File upload form (hidden by default) -->
                            <div class="modify-form" style="display: none;">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input class="modify-input" type="file" name="new_image" id="new_image">
                                    <br> 
                                    <button class="accept-button button-modify" type="submit">Aceptar</button>
                                </form>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        </div>
                        <div class="info">
                            <div class="info-container">

                                <div class="info-title">Historia</div>
                                                           
                                
                                <div class="info-content">
                                    <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mollis nec dui id tempus. Mauris ornare ipsum faucibus pulvinar maximus. Sed ligula mi, dignissim non sem a, volutpat pharetra nibh. Nunc lacus sapien, sagittis in magna id, faucibus fermentum lectus. Fusce ac est euismod, posuere lorem vitae, consequat massa. -->
                                    <?php 
                                        $id_edificio = '1';
                                        include '/var/www/html/php/edificio-info.php'; 
                                    ?>
                                </div>
                                
                            
                            </div>
                        
                            <?php if(isset($_SESSION['session_type']) && $_SESSION['session_type'] == 'admin') { ?>
                                <div class="modify-container">
                                    <button class="modify-button button-modify" onclick="toggleEditForm()">Modificar</button>
                                    <form id="editForm" action="/php/edit-edificio-info.php" method="POST" class="hidden">
                                        <textarea class="modify-textarea" name="informacion" rows="4" cols="50"><?php echo $informacion; ?></textarea>
                                        <input type="hidden" name="id_edificio" value="<?php echo $id_edificio; ?>">
                                        <button class="accept-button button-modify" type="submit">Guardar</button>
                                    </form>
                                </div>
                                                        
                                <style>
                                    .hidden { display: none; }
                                    .visible { display: block; }
                                </style>
                            
                                <script>
                                function toggleEditForm() {
                                    var form = document.getElementById('editForm');
                                    if (form.classList.contains('hidden')) {
                                        form.classList.remove('hidden');
                                        form.classList.add('visible');
                                    } else {
                                        form.classList.remove('visible');
                                        form.classList.add('hidden');
                                    }
                                }
                                </script>

                            <?php } ?>

                        </div>
                    </div>
                </div>

                <div class="slide" id="slide-2">
                    <div class="slider-container">
                        <div class="slide-header">
                            <button class="nav prev">‹</button>
                            <span class="nav-text">Salones</span>
                            <button class="nav next">›</button>
                        </div>
                        <div class="pagination">
                            <span class="dot"></span>
                            <span class="dot active"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                    <div class="slide-content">
                        <p>Curabitur gravida risus vitae maximus viverra. Proin pretium eu massa id venenatis. Ut eget enim porttitor, imperdiet arcu quis, condimentum ex. Quisque id magna sed orci scelerisque malesuada nec ut turpis.</p>
                    </div>
                    
                </div>

                <div class="slide" id="slide-3">
                    <div class="slider-container">
                        <div class="slide-header">
                            <button class="nav prev">‹</button>
                            <span class="nav-text">Horarios</span>
                            <button class="nav next">›</button>
                        </div>
                        <div class="pagination">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot active"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                    <div class="slide-content">
                        <p>hora</p>
                    </div>
                    
                </div>

                <div class="slide" id="slide-4">
                    <div class="slider-container">
                        <div class="slide-header">
                            <button class="nav prev">‹</button>
                            <span class="nav-text">¿Cómo llegar?</span>
                            <button class="nav next">›</button>
                        </div>
                        <div class="pagination">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot active"></span>
                        </div>
                    </div>
                    <div class="slide-content">
                        <p>comollegar</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <script src="/scripts/upload-form-visibility.js"></script>

        <script src="/scripts/slider.js"></script>

    </div>

    <div class="navbar-fixed-bottom">
        <div class="footer-separator"></div>
        <div class="icon-container">
            <a href="/pages/main/intro/index.html">
                <img class="icon" class="home-icon" src="../../assets/icon-home.png">
            </a>
            <a href="/pages/main/interactive-map/index.html">
                <img class="icon" src="../../assets/icon-main.png">
            </a>
            <a href="">
                <img class="icon" src="../../assets/icon-menu.png">
            </a>
        </div>
    </div>
</body>