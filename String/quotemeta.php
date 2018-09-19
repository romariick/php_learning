<?php

/* 
 quotemeta protège les chaine comme le :
 *  . \ + * ? [ ^ ] ( $ )
 */

$chaine = 'Hello word. (Can you here me ?).';

echo quotemeta($chaine);// Hello word\. \(Can you here me \?\)\.
