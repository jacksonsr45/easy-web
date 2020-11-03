<?php

namespace App\controllers;
use Core\controllers\Controller;
use App\models\User;

class HomeController extends Controller
{
    public function index($requests)
    {
        require "../App/views/index.php";
        echo "<br>";
        echo "Index";
    }

    public function create($requests)
    {
        require "../App/views/index.php";
        echo "<br>";
        echo "Create";
    }

    public function show($requests, $id)
    {
        require "../App/views/index.php";
        echo "<br>";
        echo "id: " . $id . "Requests" . $requests;
        echo "<br>";
        echo "Show";
    }

    public function update($requests, $id)
    {
        require "../App/views/index.php";
        echo "<br>";
        echo "id: " . $id . "Requests" . $requests;
        echo "<br>";
        echo "Update";
    }

    public function delete($requests, $id)
    {
        require "../App/views/index.php";
        echo "<br>";
        echo "id: " . $id . "Requests" . $requests;
        echo "<br>";
        echo "Delete";
    }
}