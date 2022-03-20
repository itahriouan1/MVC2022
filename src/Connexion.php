<?php

namespace src;

use \PDO;
use \PDOException;

class Connexion {

    private static $pdo;

    public static function getInstance (){
        if(self::$pdo==null){
            try{
                $path=__DIR__."\..\DBConfig.json";
                $config=file_get_contents($path);
                $config=json_decode($config);
                $pdo=new PDO("mysql:host=".$config->host.";dbname=".$config->dbname, $config->username,$config->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo=$pdo;
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }
        }
        return self::$pdo;
    
}
}