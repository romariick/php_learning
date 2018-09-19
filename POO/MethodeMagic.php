<?php

class Voiture{
    public function __construct() {
    }
    public function __set($name, $value) {
        echo 'Appeler si on set une valeur qui nexiste pas à linterieur du class '.PHP_EOL;
        echo 'Nom :'. $name. 'Value :'.$value.PHP_EOL;
    }
    public function __get($name) {
       echo 'Methode :'.$name.PHP_EOL;
    }
    public function __call($name, $arguments) {
        echo "On essai d\'appeler : $name avec l'argument $arguments[0]".PHP_EOL;
    } 
    public function __destruct() {
        echo "Destruction de l'objet".PHP_EOL;
    }
}
$voiture = new Voiture();
$voiture->methode = 'Nom'; // __set
$voiture->methode; // __get
$voiture->methode('Text');// call
/*
* Conclusion pour les méthodes magic :
 *  __set($value) : applerer si un Onbjet est tenté de seter un attribut qui n'existe pas 
 * la class
 * 
 * __get($name) : appler si un objet est tenté de gter un attribut qui n'existe pas dans la
 * class
 * 
 * __call($name, $value) : appeler quant on essai d'appeler une méthode qui
 * n'existe pas avec une valeur passé en argument
 *    
 */