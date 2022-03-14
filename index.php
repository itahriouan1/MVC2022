<?php

require "vendor\autoload.php";

use Controller\PersonneController;
use src\Connexion;
use Entity\Personne;
use Repository\PersonneRepository;
use src\Router;

// $persController=new PersonneController();
// $persController->createPersonne();

$router=new Router();
$router->request();


    