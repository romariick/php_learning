<?php

/*Les opérateurs d'un array sont :
 +  : union
 == : equality(
 == : identity (key/value)
!=  : not equals
!== :
 *  */

$a = [1, 2, 3, 4, 5];
$b = ["1", 2, 3, 4, 5];

var_dump($a == $b) ; // true
var_dump($a === $b); // false
var_dump($a + $b);
