<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ .  "/functions/helpers.php";
require_once __DIR__ . "/../App/routes.php";

use Core\Route;
use Core\classes\Routes;
use Core\services\Config; 

$envs = new Config;
$envs->run();