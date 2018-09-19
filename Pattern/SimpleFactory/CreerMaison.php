<?php



/**
 * Description of CreerMaison
 *
 * @author Romaric
 */
class CreerMaison 
{
    public static function faireMaison($largeur, $hauteur){
        return new Maison($largeur, $hauteur);
    }

}
