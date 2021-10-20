<?php

class Validations {

    public function __construct()
    { 
        //Empty constructor
    }

    public function is_isset($payload,$name){
        if(!isset($payload[$name])) throw new Exception($name. 'No Encontrada');
    
    }

    public function is_empty($string){
        if ($string=='' ||   $string==null) throw new Exception('Campos Vacios');
    }

    public function is_numeric($number){
        if (!is_numeric($number)) throw new Exception($number.' No es un numero');
    }

    public function is_an_empty_array($array){
        if(empty($array)) throw new Exception('Array vacio');
    }
}