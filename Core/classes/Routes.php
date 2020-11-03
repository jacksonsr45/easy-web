<?php

namespace Core\classes;

use Core\services\Container;

class Routes
{
    private $routes;
    
    /**
     * recebe valor de rotas 
     * e converte para newRoutes em 3 posições
     * Retorna $newRoutes 
    */
    protected function setRoutes($route)
    {
        for($i = 0; $i < count($route); $i++)
        {
            // echo $route[$i][0] . " " . $route[$i][1] . "<br>";
            $explode = explode('@' , $route[$i][1]);
            $remountRoute = [$route[$i][0], $explode[0], $explode[1]];
            $newRoutes[] = $remountRoute;
            
        }
        $this->routes = $newRoutes;
    }
    
    /**
     * Pega os valores de request do tipo Get e Post
     * adiciona em um objeto $obj
    */
    private function getRequests()
    {
        $obj = new \stdClass;

        foreach($_GET as $key => $value)
        {
            $obj->get->$key = $value;
        }

        foreach($_POST as $key => $value)
        {
            $obj->get->$key = $value;
        }

        return $obj;
    }

    /**
     * Pega a url com a super global $_SERVER dentro de proute com o 
     * PHP_URL_PATH voltando o caminho
    */
    private function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    protected function run()
    {
        $url = $this->getUrl();
        $urlArray = explode('/', $url);
        
        foreach($this->routes as $route)
        {
            $routeArray = explode('/' , $route[0]);
            /**
             * Corrigir erro aqui
            */
            for($i = 0; $i < count($routeArray); $i++)
            {
                if((strpos($routeArray[$i], "{") !==false) 
                    && (count($urlArray) == count($routeArray)))
                {
                    $routeArray[$i] = $urlArray[$i];
                    $param[] = $urlArray[$i];
                }
                $route[0] = implode( '/', $routeArray);
            }

            if($url == $route[0])
            {  
                $findRoute = true;
                $controller = $route[1];
                $action = $route[2];
                break;
            }
        }

        if($findRoute)
        {
            $controller = Container::newController($controller);
            switch(count($param))
            {
                case 1:
                    $controller->$action($this->getRequests(), $param[0]);
                    break;
                case 2:
                    $controller->$action($this->getRequests(), $param[0], $param[1]);
                    break;
                case 3:
                    $controller->$action($this->getRequests(), $param[0], $param[1], $param[2]);
                    break;
                default:
                    $controller->$action($this->getRequests());
                    break;
            }
        }
        else 
        {
            echo "bad request - 404";
        }
    }
}