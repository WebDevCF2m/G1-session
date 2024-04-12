<?php



// on lance le session_start() avant l'envoi de contenu 
session_start();

// si nous sommes déjà connecté
if(isset($_SESSION['monID']) &&
    $_SESSION['monID']=== session_id())
    {
        header("location: homepage.php");
        exit();
    }

// login et mot passe de l'administateur
$user = "admin";
$pwd = "root";

// si on essaye de se connecter
if(isset($_POST['login'],$_POST['password'])){
    // on vérifie le login et password
    if($_POST['login']===$user && $_POST['password']===$pwd){
        // création d'une variable de session permettant d'identifier l'administrateur
        $_SESSION['monID'] = session_id();
        // autre variable
        $_SESSION['name'] = $user;
        
        // redirection vers l'administration
        header("Location: admin.php");
        exit();

    }else{
        $erreur = "login ou password incorrectes";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        nav ul li{
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Connexion</h1>
    <?php
    include "menu.inc.php";
    ?>
    <p>Veuillez vous connecter</p>
    <?php if(isset($erreur)) echo "<h3>$erreur</h3>" ?>
    <form action="" name="connexion" method="POST">
        <input type="text" name="login" placeholder="username" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <input type="submit" value="Se connecter">
        <p>Utilisez "admin" avec "root"</p>
    </form>
    <?php
    var_dump($_POST,$_SESSION);
    ?>
</body>
</html>