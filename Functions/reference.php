<?php

function &somme(&$somme)
{
    $somme += 10;
    return $somme;
}
$val = 10;
$som = somme($val);

echo "Valeur de val : .$val et l'autre $som".PHP_EOL;
