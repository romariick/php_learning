<?php

//echo 0x22.PHP_EOL; // Base 16 0x22 => A = 10, B = 11, C .. Ex : 2 * 16 + 2 =  34
//echo 022; // Octal Base 8 => 0 * 8^2 + 2 * 8^1 + 2 * 8^0 = 18

//0b

//echo 15 << 2;//1000 0 ;
//
//
//111100 << 2 => + 1*2^5  + 1*2^4 + 1*2^3 + 1*2^2 +0 *2^1+ 0*2^0

//printf('%b', 4);

//echo 4 << 2 + 3;

$a = ['a'=>3, "c"=>4, 4=>5];
$b = ['a'=>3, "c"=>4, '4'=>5];

$c = $a + $b;

print_r($c);

var_dump($a === $b);
