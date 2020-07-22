<?php

class Router {

    public $routes = [];

    public static function loadRoutes()
    {
        $router = new self; //make an instance of myself

        require_once "routes.php";

        return $router;
    }

    public function register( $routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if(array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        return "views/404.view.php";
    }
}


