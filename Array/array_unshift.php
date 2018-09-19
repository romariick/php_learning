<?php

/*  int array_unshift ( array &$array , mixed $value1 [, mixed $... ] )
 *  retourn le nombre delemnt et ajout value au début du tableau
 */

$v = [0, 1, 3];
$array = array_unshift($v, 10);
print_r($v);//  10; 0; 1; 3

