<?php
require_once '../Autoload.php';
Autoload::register();

class Voiture
{
    public function __construct()
    {
    }
    public function somme()
    {
        echo 'sommeOk';
    }
}

$megane = new Megane();

$megane->vitesseMegane();
