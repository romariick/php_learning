<?php

// http://localhost:8777/XSS.php?id=toto
// http://localhost:8777/XSS.php?id=%3Cscript%3Ealert(%27toto%27);%3C/script%3E

 echo "Toto". $_GET['id'];

