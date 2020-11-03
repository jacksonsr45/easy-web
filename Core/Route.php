<?php

namespace Core;

use Core\classes\Routes;

class Route extends Routes
{
    public function get(array $route)
    {
        $this->creatingMethodGet($route);
    }

    private function creatingMethodGet($route)
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