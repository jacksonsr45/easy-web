<?php

namespace Core\services;

class Container
{
    public static function newController($controller)
    {
        $newController = "App\\controllers\\". $controller;
        return new $newController;
    }
}