<?php

$funct = function ($a, $b) {
    return $a * $b;
};

print_r(is_callable($funct)).PHP_EOL; // 1
echo $funct(10, 10).PHP_EOL; // 100
