<?php

/* 
  Syntaxe $a = &$b;
 * a et b sont de meme référence
 * 
 */
$a = 10;
$a = &$b;
$b = 20;

echo 'a : '. $a. ' b : '.$b; // 20 20


