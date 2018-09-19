<?php

/*
    Les opérateurs arithmetique sont :
 *  + : addition 
 *  - : soustractio
 *  % : modula
 *  / : division
 */
$rt = strcmp("aaa", "aaaa");

echo $rt;

echo 10 + 10 ; // 20
echo 10 - 10 ; // 0 
echo 10 % 2 ; // 0
echo (10 / 2).PHP_EOL; // 5
// Notes :
print 20% - 8; // 4
print -20%8; //-4 : $a % $b => mitondra ny signe ny $a.

/*Ordre operateurs */

$a = 100;
 
$b = $a++ - 10;

echo 'La valeur de b : '.$b. 'Valeur de a : '.$a;

/* Operateur d'affecation */

$i = ($j = 2) - 5;
echo 'Valeur de i '.$i. 'Valeur de j :'.$j; // 2 ; -3
