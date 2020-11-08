<?php

namespace App\Controllers;

use MicroFramework\Http\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->service->render('index.php');
    }

    public function show()
    {
        $this->service->render('index.php');
    }
}