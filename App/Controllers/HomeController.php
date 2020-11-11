<?php

namespace App\Controllers;

use MicroFramework\Http\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->service->render('index.php');
    }

    public function show()
    {
        
    }
}