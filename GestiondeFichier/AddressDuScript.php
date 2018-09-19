<?php


/*dirname répresente le répoire et la constante magic __FILE : addresse du script en cours.*/
echo dirname(__FILE__);

$f = fopen('romaric.txt', 'a+');

echo fread($f, filesize('romaric.txt'));

echo fseek($f, SEEK_CUR);

echo fread($f, 5);


fclose($f);
