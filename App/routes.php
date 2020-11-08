<?php 


$route->get("/", "IndexController@Index");
$route->get("/login", "LoginController@Index");
$route->get("/404", "ErrorController@Index");
