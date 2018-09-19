<?php
$racine = simplexml_load_file('xml03fic.xml');

$element_h1 = $racine->body;

echo $element_h1->h1;

$element_p = $racine->body->p;

/*Plusieurs noeud */

foreach ($element_p as $p){
    echo utf8_decode($p).PHP_EOL;
}
/*Récuperer les fils de noeud*/
foreach ($racine->body->children() as $nom => $element){
    echo "La balise $nom contient l'element $element".PHP_EOL; 
}