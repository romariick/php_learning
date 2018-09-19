<?php
$array1 = ["A"=> 1, "B"=>2, "C"=>3];
$array2 = ["AA"=> 1, "B"=>'2', "C"=>3, 'D'=>'2','E'=>9];

print_r(array_intersect($array1, $array2)); // A => 1, B=>2, C=>2
//
// Calcul les valeurs qui sont dans et A et B
