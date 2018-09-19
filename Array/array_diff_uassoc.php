<?php

/*
   Calcul la différence entre deux array différent à l'aide de la function 
 * de rappel en utilisant la comparaison entre la clé/valeur
 *  
 */
$array1 = ['a' => '1', "b" => '2', "c"=> 3];
$array2 = ['a' => '1000', "b" => '2', "c"=> 3, "e"=> 3];

$ret = array_diff_uassoc($array2, $array1, 'myFunction');

function myFunction($a, $b){
    if($a === $b){
        var_dump($a, $b);
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

var_dump($ret); // a=> 1000, e =>3