<?php

use Proj\Controllers\PageController;

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new self;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if(array_key_exists($uri, $this->routes[$method])){

            return $this->callAction(
                ...explode('@', $this->routes[$method][$uri])
            );

        }
    }

    protected function callAction($controller, $action)
    {
        $controllerPath = "Proj\\Controllers\\{$controller}";

        $controller = new $controllerPath;

        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} não tem a o método");
        }

        return $controller->$action();
    }
}