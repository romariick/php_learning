<?php

$titre = 'Catalogue de  la société "AB&C"';
$titre = htmlspecialchars($titre, ENT_COMPAT);
echo $titre;

/*Module xml ISO-8859-1 => UTF-8*/

echo utf8_encode($titre);

/*Module XML UTF-8 to ISO-8859-1*/

echo utf8_decode($titre);