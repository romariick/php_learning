<?php

/*Modifier ou supprimer un attribut */

$racine = simplexml_load_file('xml03fic.xml');

$racine['lang'] = 'malagasy';

unset($racine['lang']);

$racine->asXML('newxml.xml');
