<?php

$document = new DOMDocument();

/*On crée le principal element livre */

$livre = $document->createElement('livre', 'titre 1');
$document->appendChild($livre);
$titre = $document->createElement('titre', 'titre 2');
$livre->appendChild($titre);
$text = utf8_decode('PHP avancé');
$tex = $document->createTextNode($text);
$titre->appendChild($tex);

$document->save('livrexml.xml');
