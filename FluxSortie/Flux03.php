<?php
/*Get information sur le tampon */
ob_start();

echo 'a';


ob_start();

echo 'b';


/*Return la taille en octet du contenue du tampon ouvert.*/
$length = ob_get_length();

/*Return le nombre du tampon encors ouverts. */
$level = ob_get_level();
echo $length . $level;
