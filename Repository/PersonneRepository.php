<?php

namespace Repository;

use src\Connexion;
use Entity\Personne;
use PDO;
use PDOException;

class PersonneRepository {

    protected $pdo;

    public function __construct()
    {
        $this->pdo=Connexion::getInstance();
    }

    public function find($id){
        try{
            $stmt=$this->pdo->prepare("select * from personne where id=:id");
            $stmt->execute(["id"=>$id]);
            $personnes=$stmt->fetchAll(PDO::FETCH_CLASS, "Entity\Personne");
            return $personnes[0];
        }
        
        catch(PDOException $e){
            echo $e->getMessage();
    }
    }
    public function findAll(){
        try{
            $stmt=$this->pdo->prepare("select * from personne");
            $stmt->execute();
            $personnes=$stmt->fetchAll(PDO::FETCH_CLASS, "Entity\Personne");
            return $personnes;
        }
        
        catch(PDOException $e){
            echo $e->getMessage();
    }
    }
    public function create(Personne $personne){
        try{
            $nom=$personne->getNom();
            $prenom=$personne->getPrenom();
            $adresse=$personne->getAdresse();
            $email=$personne->getEmail();
            $stmt=$this->pdo->prepare("insert into personne values(DEFAULT,'$nom','$prenom','$adresse','$email')");
            $stmt->execute();
        }
        
        catch(PDOException $e){
            echo $e->getMessage();
    }
    }
}