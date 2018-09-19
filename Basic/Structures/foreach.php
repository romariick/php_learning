<?php

function myFunction(&$array)
{
    foreach ($array as &$value) {
        $value = $value + 2;
    }
    $value = $value + 3;
    
    return $value;
}
$array = ['1', '2', '3'];
myFunction($array);
print_r($array);
