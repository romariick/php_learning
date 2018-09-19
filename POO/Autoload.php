<?php

class Autoload{

    public function __construct() {   
    } 
    static function autoload($class_name){
        require_once "Autoload/$class_name.php";
    }
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}

