<?php

// on lance le session_start() avant l'envoi de contenu 
// pour éviter l'erreur (header already sent)

// lancement de session, création de l'id de session (PHPSESSID)
// côté utilisateur un cookie est créé, il contient uniquement 
// la clef de session
// côté serveur, un fichier texte est également créé,
// il porte le nom de la clef de session
session_start();

if(isset($_SESSION['nbPage']))  $_SESSION['nbPage']++;
if(isset($_SESSION['log'])) $_SESSION['log'][] = $_SERVER['REMOTE_ADDR']. " | ". date("Y-m-d H:i:s") . " | ". __FILE__."\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <style>
        nav ul li{
            display: inline;
        }
    </style>
</head>
<body>
    <h1>homepage</h1>
    <?php
    if(isset($_SESSION['name'])):
    ?>
    <h2>Bienvenue <?=$_SESSION['name']?></h2>
    <?php
    var_dump($_SESSION);
    endif;
    include "menu.inc.php";
    ?>
    <p>Bienvenue sur le site</p>
</body>
</html>