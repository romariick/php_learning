<?php

$array1 = ["A"=> 1, "B"=>2, "C"=>3];
$array2 = ["A"=> 1, "B"=>'2', "C"=>3, 'D'=>'2'];

var_dump(array_keys($array2)); // A, B, C
var_dump(array_keys($array2, '2')); // B retourn la clé du valeur 2
var_dump(array_keys($array2, '2', true)); //force === // B, D

$ret = vsprintf('Les arrgummnt %s ', array_keys($array2, '2', true));

echo $ret;

// array_keys retourn les clés d'un tableaux. Si on précise le deuxième élement
// il retourne le la clé du valeur demandé.
