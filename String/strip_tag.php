<?php

/* 
  strip_tag : remove tous les caractères comme < > 
 */

$html = '<a> <!-- Comment --> <a href="#fragment">  Exemple </a>';

echo strip_tags($html); // Exemple
