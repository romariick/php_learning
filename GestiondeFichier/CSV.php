<?php

$f = fopen('calcul.csv', 'r+');

while ($data = fgetcsv($f, ',')) {
    print_r($data);
    $num = count($data);
    
    for ($i = 0 ; $i < $num; $i++) {
        print $data[$i].PHP_EOL;
    }
}

fclose($f);
