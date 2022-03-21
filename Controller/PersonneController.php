<?php
namespace Controller;

use Entity\Personne;
use Repository\PersonneRepository;
use src\Request;
use View\View;
use View\ViewManager;

class PersonneController {


    public function showPersonne(){

        $repo=new PersonneRepository();
        $personnes=$repo->findAll();
        $viewManager = new ViewManager();
        $x=2;
        $viewManager->render('Personne\afficher',['x'=>$x, 'personnes'=>$personnes]);
        $Request = new Request();
        var_dump($Request->getParams('GET'));

    }

    public function createPersonne(){
        $repo=new PersonneRepository();

    $p1=new Personne();

    $p1->setNom("alami");
    $p1->setPrenom("jalal");
    $p1->setAdresse("Tanger");
    $p1->setNom("alami@upf.ac.ma");
    $repo->create($p1);

    }
}