<?php


/* Comparer le tableau array2 à array1 ; c'est la base de comparaison est 
 le deuxième argument.
*/
$array1 = ["a" => 1, "b"=> 2, "c"=>3, "d"=>3];
$array2 = ["a" => 1, 'toto'=>00, 'tata'=> 001];

$ret = array_diff_key($array2, $array1);
var_dump($ret);// toto
echo vsprintf('Ok Ok : %s', implode(", ", array_keys($ret)));// Ok Ok : toto, tata
 
