<?php

$route = [
    ['/', 'HomeController@index'],
    ['/teste/{id}/show', 'TesteController@show']
];

return $route;