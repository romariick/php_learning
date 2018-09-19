<?php

$v1 = 1;
$v2 = 2;
$v3 = 3;

function myFunct(){
    
    $GLOBALS['v1'] *= 2;
    print_r($GLOBALS);
    $v2 *= 2;   // Il n'execute pas celui là 
    global $v3; $v3 *= 2;
}

myFunct();
echo "$v1$v2$v3"; // 226

/*
 [GLOBALS] => Array
 *RECURSION*
    [v1] => 2
    [v2] => 2
    [v3] => 3

 *  
 */