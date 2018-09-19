<?php

$array1 = ["a" => 1, "b" => '2', "c"=>3, "d"=>["a"=>1 , "b"=>2]];
$array2 = ["a" => 100, "b" => '2', "c"=>3, "e"=>["a"=>1 , "b"=>2, "e"=>3], "d"=>["a"=>2 , "b"=>2]];

/*array_merge_recursive commbine deux ou plusieurs tableaux ensemble pas d'ecrasement de valuer*/
print_r(array_merge_recursive($array1, $array2));

/*Fussione deux ou plusieurs tableaux, il y a de l'écrasement.*/
print_r(array_merge($array1, $array2));

/*Array
(
    [a] => Array
        (
            [0] => 1
            [1] => 1
        )

    [b] => Array
        (
            [0] => 2
            [1] => 2
        )

    [c] => Array
        (
            [0] => 3
            [1] => 3
        )

    [d] => Array
        (
            [a] => Array
                (
                    [0] => 1
                    [1] => 2
                )

            [b] => Array
                (
                    [0] => 2
                    [1] => 2
                )

        )

    [e] => Array
        (
            [a] => 1
            [b] => 2
            [e] => 3
        )

)
Array
(
    [a] => 1
    [b] => 2
    [c] => 3
    [d] => Array
        (
            [a] => 2
            [b] => 2
        )

    [e] => Array
        (
            [a] => 1
            [b] => 2
            [e] => 3
        )

)

*/


