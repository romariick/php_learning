<?php

/*Tri un tableau au sens inverse à l'aide du clé
 * Ex a,b, c => c,b,a (Reverse) krsort ; ksort => a,b,c 
 *  
 */

$array = ['a'=>1, 'c'=>2, 'e'=>3, 'f'=>4, 'm'=>5];

krsort($array); // 

while (list($key, $value) = each($array)){
    echo 'Key : '. $array . ' Value : '.$value.PHP_EOL;
}
/*
 * 
Key : a Value : 1
Key : c Value : 2
Key : e Value : 3
Key : f Value : 4
Key : m Value : 5 
*/
