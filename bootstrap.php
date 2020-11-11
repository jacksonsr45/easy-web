<?php

use MicroFramework\Functions\Config;
use MicroFramework\Route\Route;

require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/vendor/jackson_sr_45/micro-framework/Functions/helpers.php";



define('APP_PATH', '/my-site/app/');

$route = new Route();

/**
 * Get Config file and run
 * required all itens from .env
*/
$envs = new Config;
$envs->run();

require_once __DIR__."/App/routes.php";

$route->dispatch();
