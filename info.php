<?php

// on lance le session_start() avant l'envoi de contenu 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <style>
        nav ul li{
            display: inline;
        }
    </style>
</head>
<body>
    <h1>info</h1>
    <?php
    if(isset($_SESSION['name'])){
    ?>
    <h2>Bienvenue <?=$_SESSION['name']?></h2>
    <?php
    }
    include "menu.inc.php";
    var_dump($_SERVER);
    ?>
    <p>About me</p>
</body>
</html>