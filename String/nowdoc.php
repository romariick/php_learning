<?php

/* 
  Impossible de parser
 */

$name  = 'Romaric';

$chaine = <<<'EOD'
        Les chaine non parser : $name
EOD;

echo $chaine; //  Les chaine non parser : $name