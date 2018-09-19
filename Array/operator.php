<?php

/*
   == vérifier les  key/valeur ; pas de vérification de data type dans l'ordre
 * ===  vérifier les key/valeur ; avec de vérification de data type dans l'ordre
 *
 */

    $a = array(1, 2, 3);
    $b = array(1 => 2, 2 => 3, 0 => 1);
    $c = array('a' => 1, 'b' => 2, 'c' => 3);
    var_dump($a == $b);
    var_dump($a === $b);
    var_dump($a == $c);
