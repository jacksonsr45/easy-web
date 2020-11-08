<?php

namespace App\Controllers;

use MicroFramework\Http\Controller;

class BaseController extends Controller
{
    public function __loadVars($request, $response, $app)
    {
        $path_views = require_once __DIR__."/../Views/"; 
        parent::__loadVars($request, $response, $app);
        $this->service->layout($path_views."layouts/default.php");
    }
}