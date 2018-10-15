<?php

// http://localhost:8777/XSS.php?id=toto
 echo "Toto". $_GET['id'];

