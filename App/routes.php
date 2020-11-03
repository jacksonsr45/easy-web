<?php

use Core\Route;
$route = new Route;
/**
 * Routes
*/
$route->create([
    ['/', 'HomeController@index'],
    ['/create', 'HomeController@create'],
    ['/show/{id}', 'HomeController@show'],
    ['/update/{id}', 'HomeController@update'],
    ['/delete/{id}', 'HomeController@delete'],
    ['/create-teste', 'TesteController@delete'],
]);