<?php

namespace Core;

class Router {
    private $routes = [];

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function dispatch($uri, $method) {
        $basePath = '/cabinet-medical-mvc/public';
        $uri = str_replace($basePath, '', parse_url($uri, PHP_URL_PATH));
        
        if (isset($this->routes[$method][$uri])) {
            $handler = $this->routes[$method][$uri];
    
            if (is_array($handler)) {
                [$controller, $method] = $handler;
                (new $controller)->$method();
            } else {
                call_user_func($handler);
            }
        } else {
            http_response_code(404);
            echo "Page not found ";
        }
    }
    
}
