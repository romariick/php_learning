<?php

$key = ["a"=>"a", "b"=>"b", "c"=>"c"];

$value = ["a"=>4, "b"=>4, "c"=>5];

print_r(array_combine($key, $value));

/*
Array
(
    [a] => 4
    [b] => 4
    [c] => 5
)
*
 * Crée un tableau dont le keys sont les valeurs du premier tableau et le deuxième
 * c'est la valeur du valeur
*/
