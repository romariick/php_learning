<?php
/*Les arguments sont évalué de gauche à droite.
 Si vous voulez que vos function puisse changer
 * la valeur de l'argument, il faut utiliser la passage par
 * référence ou de modifier la valeur de l'exterieur.*/


function myFunction($x, $x = 1, $x = 2)
{
    $array = func_get_args();
    return $array;
}
//myFunction(10);
var_dump(myFunction(10)); // 10, 1, 2 => 2 Evalué de gauche à droite

function onlyArgument($x)
{
    $array = func_num_args();
    return $array;
}

echo onlyArgument(10, 20, 30);// 10
