<?php

namespace View;

class ViewManager {

    public function render($templateFile){
        if(func_num_args()==2){
            $variables=func_get_arg(1);
            extract($variables);
        }
        $path=__DIR__."\Template\\".$templateFile.".php";
        if(file_exists($path)){       
        include($path);
        }
        else {
            echo "view not found";
        }
    }

}