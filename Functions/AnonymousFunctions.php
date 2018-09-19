<?php

/*
 * Lamba function ou fonction de fermeture.
 *  
 */

$func = function($name){
    printf('Hello word %s', $name);
};
$func('Romaric');
$foo = create_function('$x, $y', 'return $x * $y;');

echo $foo(10, 10);
