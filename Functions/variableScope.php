<?php

$a = 10;

function myFunction($b)
{
    $a = 20;
    global $a,  $c;
    
    return $c = $a + $b;
}

echo myFunction(10) + $c; // 60;
