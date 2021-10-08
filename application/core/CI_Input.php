<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Input {


    public function validate_is_isset($payload,$name){
        if(!isset($payload[$name])) throw new Exception($name. 'No Encontrada');
    
    }

    public function validate_is_empty($string){
        if ($string=='' ||   $string==null) throw new Exception('Campos Vacios');
    }

    public function validate_is_numeric($number){
        if (!is_numeric($number)) throw new Exception($number.' No es un numero');
    }
}