<?php

$array1 = ["A"=> 1, "B"=>2, "C"=>3];
$array2 = ["A"=> 1, "B"=>'2', "C"=>3, 'D'=>'2', "AAA"=>10];

function myFunction($a, $b){
    if($a === $b){
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
/*Retourn la différence entre les valeurs du tableaux ; si $a == $b ; */
$diff = array_udiff($array2, $array1, 'myFunction');
var_dump($diff);  // B => '2' , D=>2, AAA=>10
