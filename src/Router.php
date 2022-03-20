<?php

namespace src;


class Router {

    public function request(){
            $path=__DIR__."\..\Routes.json";
            $routes=file_get_contents($path);
            $routes=json_decode($routes);
            $routeFound=false;
        if(isset($_GET['action'])){   
            $this->verifyRoute($routes,$_GET['action']);
            $routeFound=true;
        }
        else{
            $this->verifyRoute($routes, '/');
            $routeFound=true;
        }
        if ($routeFound==false){
            echo 'Route not found';
        }        
    }

    public function verifyRoute($routes, $action){
        foreach($routes as $route){
            if($route->action==$action){
                $controller=$route->Controller;
                $controller=explode('::', $controller);
                $controllerClass=$controller[0];
                $controllerMethode=$controller[1];
                $controllerClass = "Controller\\".$controllerClass;
                $controllerObj = new $controllerClass;
                return $controllerObj->$controllerMethode();                    
            }
        }

    }

}