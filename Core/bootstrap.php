<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ .  "/functions/helpers.php";

use Core\classes\Routes;
use Core\classes\Uri;
use Core\services\Config; 

$envs = new Config;
$envs->run();

$routes = [
    '/' => 'controllers/Teste.php',
];

$routes = require_once __DIR__ . "/../App/routes.php";
$route = new \Core\classes\Routes($routes);