<?php

use Core\Http\Router;

if(!empty($_GET['url']))
{
    $url = $_GET['url'];
}
else {
    $url = '';
}

$router = new Router( $url );

// chargement des routes de l'application
require_once (dirname(__DIR__) . '/app/routes.php');