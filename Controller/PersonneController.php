<?php
namespace Controller;

use Entity\Personne;
use Repository\PersonneRepository;

class PersonneController {


    public function showPersonne(){

        $repo=new PersonneRepository();
        $personnes=$repo->findAll();

        var_dump($personnes);
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