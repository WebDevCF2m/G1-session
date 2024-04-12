# G2-session
Les sessions en PHP

## Ouvrir une session
Pour ouvrir une session en PHP, il faut utiliser la fonction `session_start()`. Cette fonction doit être appelée avant tout code HTML.

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html>
...
```

Si la session n'est pas ouverte, PHP ne pourra pas accéder aux variables de session.

Si une session est déjà ouverte, `session_start()` ne fait rien que transmettre la clé de session au client.

## Fermer une session
Pour fermer une session, il suffit d'appeler la fonction `session_destroy()`. Cette fonction détruit toutes les données de la session en cours.

```php
<?php
// Initialisation de la session.
// Si vous utilisez un autre nom
// session_name("autrenom")
session_start();

// Détruit toutes les variables de session
$_SESSION = array();

// Si vous voulez détruire complètement la session,
// effacez également
// le cookie de session.
// Note : cela détruira la session et pas seulement
// les données de session !
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalement, on détruit la session.
session_destroy();
?>
```

