<?php


$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
$parts = explode('/', $path);
$page = '/'.end($parts);
// $page contient maintenant la partie de l'URL après le dernier /

// Traiter la route demandée
switch ($page) {
    case '/':
    case '':
    case '/home':
    case'/index':
        require_once 'controller/homeController.php';
        $controller = new HomeController();
        $controller -> home();
        break;
    case '/index':
        require_once 'controller/index.php';
        break;
    case '/login':
        require_once 'controller/login.php';
        break;
    case '/allBeers':
        require_once 'controller/allBeers.php';
        break;
    case '/colorBeerAmbree':
        require_once 'controller/colorBeerAmbree.php';
        break;
    case '/colorBeerBlanche':
        require_once 'controller/colorBeerBlanche.php';
        break;
    case '/colorBeerBlonde':
        require_once 'controller/colorBeerBlonde.php';
        break;
    case '/colorBeerBrune':
        require_once 'controller/colorBeerBrune.php';
        break;
    case '/infoBeer':
        require_once 'controller/infoBeer.php';
        break;
    case '/ticket':
        require_once 'controller/ticket.php';
        break;
    case '/dashboard':
        require_once 'controller/admin/dashboard.php';
        break;
    case '/simpleCRUD':
        require_once 'controller/admin/simpleCRUD.php';
        break;
    case '/complexCRUD':
        require_once 'controller/admin/complexCRUD.php';
        break;
    case '/logout':
        require_once 'controller/admin/logout.php';
        break;
    default:
        // Route non trouvée, afficher une page d'erreur
        require_once 'controller/404.php';
        break;
    }














/* 

// Récupérer l'URL demandée
$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$page = $url[2];
// Charger le contrôleur approprié en fonction de l'URL demandée
switch ($page) {
    case '':
    case '/':
    case '/index':
        require_once 'controller/index.php';/*
        $controller = new HomeController();
        $controller->index();
        break;
        
    case '/allBeers':
        require_once 'AllBeersController.php';
        $controller = new AllBeersController();
        $controller->index();
        break;
    case '/contact':
        require_once 'controllers/ContactController.php';
        $controller = new ContactController();
        $controller->index();
        break;
    default:
        header('HTTP/1.1 404 Not Found');
        echo '404 Not Found';
        break;
        
}*/