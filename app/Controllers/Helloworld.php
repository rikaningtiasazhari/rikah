<?php namespace App\Controllers;

class Helloworld extends BaseController{
    public function index($name, $npm){
        
        //echo $this<-name;

        echo $name. "<br>";
        echo $npm. "<br>";
        //echo "Hello Rikaaa";

    }
    public function show (){
        echo "Rika Ningtias Azhari";
        echo "1817051073";
    }
    
}