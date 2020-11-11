<?php 

/**
 * Require bootstrap in base dir in this app
 * Bootstrap alto-load with public/index.php
 * load functions from route 
*/
require_once __DIR__."/../bootstrap.php";
/**
 * Require requestError404.php
 * this file return case URI not exist in this system
 * from page error 404
*/
require_once __DIR__ ."/../vendor/MicroFramework/Functions/requestError404.php";

