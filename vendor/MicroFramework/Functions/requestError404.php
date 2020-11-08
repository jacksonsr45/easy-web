<?php

$base = dirname($_SERVER['PHP_SELF']);
// Update request when we have a subdirectory
if( ltrim($base, '/'))
{
    try {
        $base = require_once __BASEDIR__."/App/Views/error/error404.php";
    } catch (\Throwable $th) {
        $err = $th;
    }
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}