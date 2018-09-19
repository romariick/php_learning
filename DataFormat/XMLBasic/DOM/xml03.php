<?php

$document = new DOMDocument();

$document->load('xml03ficbis.xml');

$racine = $document->documentElement;

$auteurs = $document->getElementsByTagName('auteur');

foreach ($auteurs as $auteur) {
    foreach ($auteur->childNodes as $node) {
        if ($node->nodeType == XML_ELEMENT_NODE) {
        }
    }
}
