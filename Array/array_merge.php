<?php
/*
   Syntaxe : array_merge($array1, []);
 * Fusion deux ou plusieurs  tableaux
 */

$array = ['a'=> 1, "c"=>2];

var_dump(array_merge($array, [])); // a=>1, c =>2
