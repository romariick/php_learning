
<?php

ob_start();

echo 'Essai d\' affichage ';

$affiche = ob_get_contents();

ob_clean();

ob_end_flush();

echo 'Après affichage';

echo $affiche;
?>