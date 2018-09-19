<?php

$chaine = 'AB absc196565akdljdl';

/*Tous sauf a jusque z et plus + */
$retour = preg_match('/[^a-z196565]+/', $chaine, $array);

var_dump($array); // AB