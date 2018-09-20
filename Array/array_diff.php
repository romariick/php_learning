<?php

$array1 = ["A"=> 1, "B"=>2, "C"=>3];
$array2 = ["A"=> 1, "B"=>'2', "C"=>3, 'D'=>'2','E'=>9];

var_dump(array_diff($array2, $array1)); //

// E => 9 ; comparer les valeurs entre  array2 to array1
// Cad 1 existe dans array1, 2, 3, mais 9 n'existe pas donc il renvoie 9
// Conclusion : array_diff permet de compararer les valeurs entre deux ou plusieurs tableaux.
