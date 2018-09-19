<?php

/*
 * compare deux chaine sensible à la casse
 * strcmp(chaine1, chaine2) ; chaine1 > chaine 2 => <0 ; ! => 1
 */

echo strcmp('abc', 'abcd'); // -1
echo strcmp('abcde', 'abcd'); // 1
echo strcmp('abcde', 'abcde'); // 0
