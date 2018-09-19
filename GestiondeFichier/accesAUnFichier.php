<?php

/*Lire dans un fichier => renvoie vers les sorties standards */
$file = file_get_contents('exemple.txt');
/*Ecrire dans un fichier */
file_put_contents('exemple.txt', 'Lalaina Romaric', FILE_APPEND);

/*Lire un fichier et juste affichie*/
$read = readfile('exemple.txt');

/*Lire un fichier déjà ouvert : fpassthru*/
$f = fopen('exemple.txt', 'r');
$read2 = fpassthru($f);
echo $read2;
fclose($f);

