<?php

namespace src;

class Request {

public function getParams($methode){

    if($methode=='GET'){
        if(isset($_GET)){
            return $_GET;
        }
    }
    if($methode=='POST'){
        if(isset($_POST)){
            return $_POST;
        }
    }
}

}