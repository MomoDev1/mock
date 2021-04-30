<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');


require_once 'Autoloader.php';

Autoloader::register();

$router = new App\Core\Router\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

$router->run();
