<?php

abstract class ABVoiture{
    abstract protected function demarrer();
    public function arreter($vitesse) {
        echo 'Vitess : '.$vitesse;
    }
}
class Voiture extends ABVoiture{
    public function __construct() {
        
    }
    public function demarrer() {       
    }
    public function arreter($vitesse) {
        echo 'Arreter avec un vitesse de :'.$vitesse;
    }
}

$voiture = new Voiture();
$voiture->arreter(100);