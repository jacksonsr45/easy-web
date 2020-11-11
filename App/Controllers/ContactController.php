<?php

namespace App\Controllers;

use MicroFramework\Http\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $this->service->render('contact.php');
    }

    public function show()
    {
        
    }
}