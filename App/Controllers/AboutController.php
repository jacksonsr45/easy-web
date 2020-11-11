<?php

namespace App\Controllers;

use MicroFramework\Http\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $this->service->render('about.php');
    }

    public function show()
    {
        
    }
}