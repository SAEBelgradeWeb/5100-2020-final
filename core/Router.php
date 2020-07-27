<?php

class Router {

    public $routes = [];

    public static function loadRoutes()
    {
        $router = new self; //make an instance of myself

        require_once "routes.php";

        return $router;
    }

    public function get($route, $controller)
    {
        $this->routes['GET'][$route] = $controller;
    }

    public function post($route, $controller)
    {
        $this->routes['POST'][$route] = $controller;
    }

    public function direct($uri, $method)
    {
        if(array_key_exists($uri, $this->routes[$method])) {
            return $this->routes[$method][$uri];
        }
        return "views/404.view.php";
    }
}


