<?php

class Voiture
{
    public function __construct()
    {
        echo 'Appeler à la construction de l\'objet';
    }
    public function vitesse()
    {
        echo 'Vitesse de 120 Km/h';
    }
    public function __destruct()
    {
        echo 'Appeler à la destruction de l\'objet';
    }
}
$voiture = new Voiture();
$voiture->vitesse();
