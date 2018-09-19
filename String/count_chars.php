<?php

/* 
   mixed count_chars($chaine, 1) : compter les nombres d'occurence dans une chaîne
 */

$chaine = 'Bonjour le monde.';
 
foreach (count_chars($chaine, 1) as $i => $val){
    
    echo "Nombre doccurence de $val : ".  chr($i).PHP_EOL;
}

