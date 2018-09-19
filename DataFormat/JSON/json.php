<?php

$array = ["a" => 1, "b" => 2, "c" => 3];

/*array => json format */

echo json_encode($array);

$json = '{
        "a": 1,
        "b": 2,
        "c": 3
    }';

/*Format json to array json decode*/

print_r (json_decode($json, true));