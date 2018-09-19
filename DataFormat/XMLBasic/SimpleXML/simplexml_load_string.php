<?php

/*Load un fichier xml dépuis un fichier ou d'initialiser avec une chaîne */

$xml = '<document><titre>PHP 5 avancé </titre></document>';

$racine = simplexml_load_string($xml); // return simpleXMLElement

/*
 * Copie dans un fichier xml
 */
$racine->asXML('copie.xml');
