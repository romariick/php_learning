<?php

$hashpwd = crypt('mypassword');

if (crypt('mypassword') == $hashpwd) {
    echo true . 'Pwd :'.  $hashpwd;
}
$hashMd5 = md5('Lalaina'.'myspassword'.'Romaric');

var_dump($hashMd5);

if (md5('Lalaina'.'myspassword'.'Romaric') ==  $hashMd5) {
    echo 'True Ok md5';
}

// mdp + salt : salt permet de renforcer le secrèt de mdp
