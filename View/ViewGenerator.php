<?php

namespace View;

class ViewGenerator{

    public static function path($route){
        if(func_num_args()==1){
            $path='?action='.$route;
        }
        else if (func_num_args()==2){
            $params=func_get_arg(1);
            $i=0;
            foreach($params as $key => $value){
                $params2[$i]=$key.'='.$value;
            }
            $params2=implode('&',$params2);
            $path='?action='.$route.'&'.$params2;
        }
        else{
            echo 'wrong parameters for path fuction';
        }
        
        return $path;
    }

}