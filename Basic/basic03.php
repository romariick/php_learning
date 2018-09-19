<?php

/* XOR : L'un des deux et uniquement l'un des deux renvoie TRUE */
$a = 10;
$b = 20;
$c = 20;

if (($a < 20 xor $b < 5) xor $c == 10) {
    echo 'true';
}
