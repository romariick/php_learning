<?php

/*
  Les variables contients :
 * une lettre,
 * underscore
 * chiffre
 * Et ne commence jamais par des chiffres
 *
 * Variables names est sensible à la casse
 * Les variables ou les nom des fonctions peuvent commencer par __ ou lettre.
 */

//$1variables ; // Faux

$__ok = 10;

var_dump($__ok);

function __()
{
    return 10;
}

echo __();
