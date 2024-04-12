<?php

// on lance le session_start() avant l'envoi de contenu 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <style>
        nav ul li{
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Photos</h1>
    <?php
    if(isset($_SESSION['name'])):
    ?>
    <h2>Bienvenue <?=$_SESSION['name']?></h2>
    <?php
    endif;
    include "menu.inc.php";
    ?>
    <p>De belles photos</p>
    <p><img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google"></p>
</body>
</html>