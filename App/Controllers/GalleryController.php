<?php

namespace App\Controllers;

use MicroFramework\Http\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $this->service->render('gallery.php');
    }

    public function show()
    {
        
    }
}