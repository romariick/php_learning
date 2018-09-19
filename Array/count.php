<?php

$array = array(1.1 => '1', 1.2 => '1');
var_dump($array);
echo count($array);
// PHP transforme le 1.1 et 1.2 en tant que 1 du première élément donc count donne 1
