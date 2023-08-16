<?php

namespace core;

class Router {

   public  $routes=[
        'get'=>[],
        'post'=>[]
    ];

    public static function load($file) {
        $router = new static();
        require $file;
        return $router;
    }
    public function get($uri, $controller){
        return $this->routes['get'][$uri]= $controller;
    }

    public function post($uri, $controller){
        return $this->routes['post'][$uri]= $controller;
    }

    
    public function direct($uri, $requestType) {
        //1- match
        if (array_key_exists($uri, $this->routes[$requestType] )) {
            return $this->callAction (...explode('@', $this->routes[$requestType][$uri]));
        }

        throw_new_Exeption('Invalid URI');
       
    }

    function callAction($controller, $action) {
        $controller="app\\controllers\\". $controller;
        $controller= new $controller();
        if (! method_exists($controller, $action)) {
            throw_new_Exeption('Action not exist');

        }
        return $controller->$action();
    }

       
}