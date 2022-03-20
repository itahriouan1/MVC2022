<?php

namespace Controller;

use View\ViewManager;

class homeController{

    public function index(){
        $viewManager= new ViewManager();
        $viewManager->render('index');
    }
}