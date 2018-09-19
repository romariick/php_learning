<?php

/*
* Syntaxe : strtr(chaineAtraiter, from, to)
 * si un (to) un array il est sous forme de ('to' => 'from')
* Remplace des caractères dans une chaine
*/

$chaine = 'Chaine à traitrer ';

echo strtr($chaine, 'à', 'Ok').PHP_EOL;

$chaine2 = 'Chaine à traiter';
$array = ['Chaine' => 'Romaric', 'traiter' => 'Lalaina'];

print_r(strtr($chaine2, $array));
