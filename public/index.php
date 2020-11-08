<?php 
/**
 * Require file config in base path this system
 * Config return global variables from paths
*/
require_once __DIR__."/../config.php";
/**
 * Require bootstrap in base dir in this app
 * Bootstrap alto-load with public/index.php
 * load functions from route 
*/


require_once __BASEDIR__."/bootstrap.php";
/**
 * Require requestError404.php
 * this file return case URI not exist in this system
 * from page error 404
*/
require_once __VENDOR__ ."/MicroFramework/Functions/requestError404.php";