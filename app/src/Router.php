<?php

class Router{
    private $routes = [];

    public function add($path, $callback){
        $this->routes[$path] = $callback;
    }

    public function dispatch($requestedPath){
        foreach($this->routes as $path => $callback){
            if($path === $requestedPath){
                return call_user_func($callback);
            }
        }
        echo "404 - Página não encontrada";
    }
}