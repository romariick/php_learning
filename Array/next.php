<?php

$array = ["a"=>1,
          "b"=>2,
          "c"=>3,
          "d"=>4
         ];

print_r(current($array)); // 1
print_r(next($array));// 2
print_r(next($array));// 3
print_r(prev($array)); //2 recule de la position courante
print_r(end($array));// 4
print_r(reset($array)); //1 se deplace le pointeur du tableau au 1ére element
