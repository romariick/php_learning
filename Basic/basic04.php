<?php

/*Le réf est un moyen d'accèder au contenu d'une même
 * variable en utilisant plusieurs nom. Passage par réference.*/

function modifyArray(&$array)
{
    foreach ($array as &$value) {
        $value = $value + 2 ;
    }
    $value = $value + 3;
}

$array = [1, 2, 3];
modifyArray($array);
print_r($array);
