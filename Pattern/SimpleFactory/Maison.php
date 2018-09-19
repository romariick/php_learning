<?php


class Maison implements DimensionMaison
{
    protected $hauteur;
    protected $largeur;

    public function __construct($largeur, $hauteur)
    {
        $this->hauteur = $hauteur;
        $this->largeur = $largeur;
    }

    public function getHauteur()
    {
        return $this->hauteur;
    }

    public function getLargeur()
    {
        return $this->largeur;
    }
}
