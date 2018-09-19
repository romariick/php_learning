<?php

$array1 = ["A"=> 1, "B"=>2, "C"=>3];
$array2 = ["A"=> 1, "B"=>'22', "C"=>3, 'D'=>'2', "AAA"=>2];

var_dump(array_diff_assoc($array2, $array1));
// Conclusion array_diff_assoc fait la comparaison entre clé/valeur.
// B=>22 D=>2, "AAA"=>2  comparaison entre clé/valeur
