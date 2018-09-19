<?php

interface IVoiture{
    public function demarrer();
    public function arreter();
}
class Voiture implements IVoiture{
    public function __construct() {    
    }
    
    public function demarrer() {
        echo 'demarrer';
    }
    public function arreter() {
        echo 'arreter';
    }
}
$voiture = new Voiture();
$voiture->demarrer();
$voiture->arreter();
