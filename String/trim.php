<?php

/*
  trim(string, caractere) : efface les new line tab white space at string
 */

$chaine = '  espace vide devant et arriere ';
echo ltrim($chaine).PHP_EOL;
echo rtrim($chaine).PHP_EOL;
echo trim($chaine, 'e');
