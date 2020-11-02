<?php

namespace App\controllers;
use Core\controllers\Controller;
use App\models\User;

class HomeController extends Controller
{
    public function index($requests)
    {
        require "../App/views/index.php";
    }

    public function create($requests)
    {
        
    }

    public function show($requests, $id)
    {
        
    }

    public function update($requests, $id)
    {
        
    }

    public function delete($requests, $id)
    {
        
    }
}