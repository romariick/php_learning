<?php

$var = 10;

function &myFunction(&$var)
{
    return $var + 20;
}

/*@ : operateur pour ignorer un warging. */

echo @myFunction($var).PHP_EOL;

echo $var;

// conclusion un function déclarer en tant que réference doit assigné toujours à$
// un variables et il doit retourner une réference d'un variable
