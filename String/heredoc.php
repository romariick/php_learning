<?php

/*
  heredoc : possible de parser
 */
$name = 'Romaric';

$chaine = <<<EOD
    voici les textes $name
EOD;

echo $chaine;// voici les textes Romaric
