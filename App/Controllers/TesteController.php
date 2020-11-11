<?php

namespace App\Controllers;

use MicroFramework\Http\Controller;

class TesteController extends Controller
{
    public function index()
    {
        $this->service->render('service.php');
    }

    public function show()
    {
        
    }
}