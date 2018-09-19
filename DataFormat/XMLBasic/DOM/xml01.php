<?php
$document = new DOMDocument();
$document->load('xml03fic.xml');

$racine = $document->documentElement;

$nodes  = $document->childNodes;

$nodeLis =  new DOMNameList($document);

foreach ($nodeLis as $nodLs) {
    echo 'Noeud : '.$nodLs;
}
foreach ($nodes as $node) {
    echo 'Tag name : '.$node->tagName;
}
