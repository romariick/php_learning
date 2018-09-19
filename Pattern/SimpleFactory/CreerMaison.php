<?php


class CreerMaison
{
    public static function faireMaison($largeur, $hauteur)
    {
        return new Maison($largeur, $hauteur);
    }
}
