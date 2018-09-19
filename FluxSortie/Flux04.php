<?php

/*ob_gzhandler : compression de fichier ave zlib*/

ob_start('ob_gzhandler');

echo 'a';

ob_end_clean();