<?php

/* Static :
 * permet d'acceder directement avec le method ou la propriété sans 
   instancié l'objet donc pas besoins de $this.On utilise donc self 
*/
class Voiture{
    public function __construct() {       
    }
    
    public static function demarrerq(){
        echo 'Demarer voiture';      
      //  $this->arreter();
    }
    public function arreter(){
        echo 'arreter';
    }
}

$voiture = Voiture::demarrerq();
