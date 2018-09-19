<?php

/*
   Recherche dans un tableau la clé associé à une valeur
 * Syntaxe : mixed array_search(mixed $valeurAChercher, $tableauQuiContientLaValue, int flage);
 * Il retourne la première element qui trouve si plusieurs value
 */

$array = ['a'=>1, "b"=>2, "c"=>3];

print_r(array_search('2', $array)); // b
