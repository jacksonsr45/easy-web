<?php

namespace Core;

use Core\classes\Routes;

class Route extends Routes
{
    public function create(array $route)
    {
        $this->creatingMethod($route);
    }

    private function creatingMethod($route)
    {
        try {
            $this->setRoutes($route);
            $this->run();
        } catch (\Throwable $th) {
            echo "<br>";
            echo $th->getMessage();
            echo "<br>";
            echo "<br>";
            echo $th;
        }
    }
}