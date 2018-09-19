<?php

$array = [0 => 1,
          "b"=> 2,
          "c" => 3
         ];



while (key($array) !== null) {
    echo " Current : ".  current($array);
    next($array);
}
/*Identique comme foreach($array as $value => $key) */

while (list($key, $value) = each($array)) {
    echo 'Key :'. $key. ' Value : '. $value;
}
