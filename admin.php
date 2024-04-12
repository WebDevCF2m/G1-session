<?php

// on lance le session_start() avant l'envoi de contenu 

session_start();

// on vérifie si nous ne sommes pas connectés
if(!isset($_SESSION['monID']) || 
    $_SESSION['monID']!== session_id())
    {
        header("location: connection.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <style>
        nav ul li{
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Administration</h1>
    <h2>Bienvenue <?=$_SESSION['name']?></h2>
    <?php
    include "menu.inc.php";
    ?>
    <p>Administrons le site</p>
</body>
</html>