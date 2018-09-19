<?php

/*Manipulation des attributs */

$racine = simplexml_load_file('xml03fic.xml');
echo $racine['lang']; 

/*Lister tous les attributs */

foreach ($racine->head->attributes() as $nom => $value){
    echo "Nom attribut : $nom avec la valeur : $value";
}