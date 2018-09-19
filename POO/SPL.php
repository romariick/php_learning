<?php

$array = ["a" => 1, "b" => 2, "c" => 3];

$arrayIter = new ArrayIterator($array);

for ($arrayIter->rewind() ; $arrayIter->valid() ; $arrayIter->next()) {
    echo 'Current : '.$arrayIter->current().PHP_EOL;
}

class Voiture
{
    public $vitesse = 100;
    public $km = 20;
}

$arrayObjet =  new ArrayObject(new Voiture());
$arrayCurrent = $arrayObjet->getIterator();

while (list($key, $value) = each($arrayCurrent)) {
    echo 'Key :'.$key. ' Value :'.$value;
}
