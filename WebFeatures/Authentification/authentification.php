<?php
//PHP_AUTH_USER, PHP_AUTH_PWD, PHP_AUTH_TYPE


header('WWW-Authenticate: Basic realm=secret area');
header('HTTP/1.1', 401, 'Unauthorized');
echo 'If clic cancel';
exit;
//var_dump($_SERVER['PHP_AUTH_USER']);
