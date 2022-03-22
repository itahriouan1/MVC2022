<?php

namespace src;

class Router{

    public function request(){
            
            $routeFound=false;
            if (isset($_GET["action"])){
            $route = $this->verifyRoute($_GET["action"]);
                if ($route != null){
                    $this->callControllerMethode($route);
                    $routeFound=true;
                }       
            }                             
            else{
            $route = $this->verifyRoute("/");
                if ($route != null){
                    $this->callControllerMethode($route);
                    $routeFound=true;
                }       
            }
            if ($routeFound==false){
                echo 'route not found';
            }
            
        }            
    public function verifyRoute($action){
        $path=__DIR__.'\config\routes.json';
        $content=file_get_contents($path);
        $routes=json_decode($content);
        $result=null;
        foreach ($routes as $route){
            if($route->action==$action){
                $controller=$route->Controller;
                $result = $controller;
            }
        }
        return $result;
    }
    public function callControllerMethode($controller){
        $controller=explode("::",$controller);
                $controllerClass=$controller[0];
                $controllerMethode=$controller[1];
                $controllerClass="Controller\\".$controllerClass;
                $ControllerObj = new $controllerClass;
                return $ControllerObj->$controllerMethode();
    }
}