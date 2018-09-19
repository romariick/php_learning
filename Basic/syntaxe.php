<?php

/*Declaration de variable et référence */

$a = 10;

$b = &$a; // b et a sont de même réf. Le contenue de a est donc contenue de b
$b = 50;

echo 'a : '.$a. ' b : '.$b;

