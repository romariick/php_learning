<?php
/*Imbrication de tampon */
ob_start();
echo 'a'; // En onvoie le premier tampon a
ob_start();
echo 'b'; // En onvoie le deuxième tampon b
$deuxime = ob_get_contents();

ob_end_flush(); //arrête de script et envoie vers le serveur web.

echo $deuxime;

echo 'c';
$premier = ob_get_contents(); /* récuperer le contenu du tampon au lien d'envoyer
// au serveur web.*/
ob_end_clean(); // vide le tampon sans rien envoyer dans le serveur.

echo  $premier . $deuxime;
