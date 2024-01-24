<?php

// <-- Ouverture de session -->
session_start();
// <-- Autoload -->
spl_autoload_register(function (string $class) {
    require_once lcfirst(str_replace('\\', '/', $class)) . '.php';
});
// <-- Router (switch) -->
if (array_key_exists('route', $_GET)) {
    switch ($_GET['route']) {
        // affichage page d'acceuil 
        case 'home':
            $controller = new Controllers\HomeController();
            $controller->displayHome();
            break;
        // redirection vers la page d'acceuil par défaut 
        default:
            header('Location: index.php?route=home');
            break;
    }
}