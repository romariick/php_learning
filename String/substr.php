<?php

$chaine = 'romariick@gmail.com';

var_dump(substr($chaine, strpos($chaine, '.')));// .com

echo preg_match('/[a-z]@gmail.com/', $chaine); // 1

