<?php

$a = [3, 2, 1];
asort($a, SORT_NUMERIC);
print_r($a);
/*
 * Array
(
    [2] => 1
    [1] => 2
    [0] => 3
)
    Trie le tableau et conserve l'association des index
 */