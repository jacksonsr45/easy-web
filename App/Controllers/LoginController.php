<?php

namespace App\Controllers;

use MicroFramework\Http\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->service->render('Login/index.php');
    }

    public function show()
    {
        echo "Jackson show";
    }
}