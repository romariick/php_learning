<?php

$array1 = ['a' => 1, "b"=>3, 'c'=>2];
$array2 = ['a' => 1, "b"=>2, 'c'=>3];

print_r(array_intersect_assoc($array1, $array2));

/*Calcul l'instersection en deux tableaux Clé/Valeur*/



