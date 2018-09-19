<?php

/*
  int strlen(string), : calcul la taille d'un chaîne en byte.
 */

$chaine = 'chaine de caractere';

echo strlen($chaine); // 19;

$chaineAvecAccent = 'chaîne de caractère';

echo strlen($chaineAvecAccent); // 21

print_r(strlen([0, 1, 2]));// error
