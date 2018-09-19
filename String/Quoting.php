<?php
/*
 * Les chaînes de caractères en PHP entre double ou simple quote '' ou ""
 *  Syntaxe $chaine = 'Ma chaine de caractère'; ou "Ma chaine de caractère";
 */

$chaine = "Ma chaine de caracter ";
$singleQuote = 'avec single quote';

/*Affichage simple. */
echo $chaine.$singleQuote;

/*Affichage avec masque : on utilise le
 * %s : chaîne,
 * %d : entier signé,
 * %f : float,
 * %u : entier non singé
 * %b : binaire
 * %x : hex decimale
 * %o : octal
 *
 * Note : %%d : sans interpréte comme un paramètre.
 */

$entier = 10;
$decimal = 1.0;
printf("Dix :%d est un entier.\n", $entier);

/*Compléter à droite il faut insérer le symbole - */

printf("%-40d B\n", $entier); // 4 à droite
printf("%06d\n", $entier); // 00000010

printf('%08.4f \n', $decimal); // 8 digit au total dont 4 décimal après la virgule

/*sscanf premet de recuper une variable*/

$variable = "Prix de 10 euro ";

list($indic, $prix) =sscanf($variable, '%s de %d');

echo 'Prix : '.$indic.PHP_EOL;
echo 'Somme :'.$prix.PHP_EOL;
