<?php

require "vendor\autoload.php";

use src\Connexion;
use Entity\Personne;
use Repository\PersonneRepository;






$repo=new PersonneRepository();

$p1=new Personne();

$p1->setNom("alami");
$p1->setPrenom("jalal");
$p1->setAdresse("Tanger");
$p1->setNom("alami@upf.ac.ma");


//$repo->create($p1);

$personnes=$repo->findAll();

var_dump($personnes);


    