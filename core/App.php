<?php

class App {
    protected $routes = [];
    protected $request;

    public function __construct() {
        $this->request = $_SERVER['REQUEST_URI'];
    }

    public function route($uri, $controller, $method) {
        $this->routes[$uri] = ['controller' => $controller, 'method' => $method];
    }

    public function run() {
        foreach ($this->routes as $uri => $route) {
            if ($this->request === $uri) {
                $controller = new $route['controller']();
                return $controller->{$route['method']}();
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
}