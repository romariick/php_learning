<?php

/*Recherche avex xpath*/
$racine = simplexml_load_file('xml03fic.xml');

$xpath = '/html/body/p';
$paragraphe = $racine->xpath($xpath);

foreach ($paragraphe as $p){
    echo "Balise p : $p".PHP_EOL;
}

