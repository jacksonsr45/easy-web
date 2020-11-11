<?php 


$route->get("/", "HomeController@index");
$route->get("/contato", "ContactController@index");
$route->get("/sobre", "AboutController@index");
$route->get("/servicos", "ServiceController@index");
$route->get("/galeria", "GalleryController@index");

$route->get("/teste/[:id]", "TesteController@index");
