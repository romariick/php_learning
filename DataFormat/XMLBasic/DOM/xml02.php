<?php

$document =  new DOMDocument();
$document->load('xml03ficbis.xml');
$racine = $document->documentElement;

$auteurs = $document->getElementsByTagName('auteur');

foreach ($auteurs as $auteur) {
    foreach ($auteur->childNodes as $child) {
        if ($child->nodeType == XML_ELEMENT_NODE) {
            if ($child->tagName == 'nom') {
                echo 'Nom : '. $child->firstChild->nodeValue.PHP_EOL;
            }
        }
    }
}
