<?php

require_once __VENDOR__."/autoload.php";
require_once __DIR__."/vendor/MicroFramework/Functions/helpers.php";

$route = new MicroFramework\Route\Route();

use MicroFramework\Functions\Config;

/**
 * Get Config file and run
 * required all itens from .env
*/
$envs = new Config;
$envs->run();

require_once __APP__."/routes.php";

$route->dispatch();