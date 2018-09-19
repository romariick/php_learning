<?php

/*
   Namespaces : c'est comme les package en Java ; donc pour utiliser un
 * package il faut utiliser le mot clé use suivi du nom du class.
 *
 */

namespace Namespacess\ListeVoitureOccasion;

echo __NAMESPACE__;
require_once './VoitureOccasion.php';

$v = new VoitureOccasion();

$v->somme();
